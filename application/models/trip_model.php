<?php
/**
 * Created by PhpStorm.
 * User: Shailesh
 * Date: 9/21/15
 * Time: 1:11 PM
 */
Class Trip_model extends CI_Model {

    //check for duplicate trip name
    public function check_trip($tripName) {
        $this->db->select('tripName');
        $this->db->from('trips');
        $this->db->where('tripName',$tripName);
        $this->db->limit(1);

        $query = $this->db->get();
        if($query -> num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    //Check for duplicate trip id
    public function check_tripID($tripID) {
        $this->db->select('id');
        $this->db->from('trips');
        $this->db->where('id',$tripID);
        $this->db->limit(1);

        $query = $this->db->get();
        if($query -> num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function create($id){
        $data = array('id'=>$id,
            'tripName'=>$this->input->post('trip'),
            'price'=>$this->input->post('price'),
            'altitude'=>$this->input->post('altitude'),
            'difficulty'=>$this->input->post('difficulty'),
            'distance'=>$this->input->post('distance'),
            'duration'=>$this->input->post('duration'));
        $this->db->insert('trips', $data);
    }

    public function update(){
//        $this -> db -> select('password');
//        $this -> db -> from('users');
//        $this -> db -> where('username',$this->input->post('hidden'));
//        $this -> db -> limit(1);
//        $query = $this -> db -> get();
//        foreach($query->result() as $row) {
//
//            if($row->password == $this->input->post('password')){
//                $password = $this->input->post('password');
//
//            } else {
//                $password = MD5($this->input->post('password'));
//
//            }
//        }
//
//        $this->db->where('username',$this->input->post('username'));
//        $data = array(
//            'firstname'=>$this->input->post('firstname'),
//            'lastname'=>$this->input->post('lastname'),
//            'password'=>$password,
//            'username'=>$this->input->post('username')
//        );
//
//        $this->db->where('username', $this->input->post('hidden'));
//        $this->db->update('users', $data);
    }

    public function delete(){
        $id = $this->input->POST('id');
        $this->db->where('id', $id);
        $this->db->delete('trips');

        $this->db->where('trip_id', $id);
        $this->db->delete('trip_details');
    }

    public function listTrip(){
        $this->db->order_by("tripName", "asc");
        $data = $this->db->get('trips');
        foreach ($data->result() as $row){
            $edit = base_url().'admin/editTrip/';
            $delete = base_url().'admin/deleteTrip/';
            echo "<tr>
                        <td>$row->id</td>
                        <td>$row->tripName</td>
                        <td>$row->price</td>
                        <td>$row->altitude</td>
                        <td>$row->difficulty</td>
                        <td>$row->distance</td>
                        <td>$row->duration</td>

                        <td><a href='$edit' data-id='$row->id' class='btnedit' title='edit'><i class='glyphicon glyphicon-pencil' title='edit'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='$delete' data-id='$row->id' class='btndelete' title='delete'><i class='glyphicon glyphicon-remove'></i></a></td>
                    </tr>";
        }
        exit;
    }
}

