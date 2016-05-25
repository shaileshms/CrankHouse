<?php
/**
 * Created by PhpStorm.
 * User: Shailesh
 * Date: 9/21/15
 * Time: 1:11 PM
 */
Class User_model extends CI_Model {
    function login($username, $password) {
        $this -> db -> select('username, password');
        $this -> db -> from('users');
        $this -> db -> where('username',$username);
        $this -> db -> where('password',$password);
        $this -> db -> limit(1);

        $query = $this -> db -> get();

        if($query -> num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    //check for duplicate username
    public function check_username($username) {
        $this->db->select('username');
        $this->db->from('users');
        $this->db->where('username',$username);
        $this->db->limit(1);

        $query = $this->db->get();
        if($query -> num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function create(){
        $data = array('username'=>$this->input->post('username'),
            'password'=>MD5($this->input->post('password')),
            'firstName'=>$this->input->post('firstName'),
            'lastName'=>$this->input->post('lastName'));
        $this->db->insert('users', $data);
    }

    public function update(){
        $this -> db -> select('password');
        $this -> db -> from('users');
        $this -> db -> where('username',$this->input->post('hidden'));
        $this -> db -> limit(1);
        $query = $this -> db -> get();
        foreach($query->result() as $row) {
//            echo $row->password;
            if($row->password == $this->input->post('password')){
                $password = $this->input->post('password');
//                echo $password;
            } else {
                $password = MD5($this->input->post('password'));
//                echo $password;
            }
        }

        $this->db->where('username',$this->input->post('username'));
        $data = array(
            'firstname'=>$this->input->post('firstname'),
            'lastname'=>$this->input->post('lastname'),
            'password'=>$password,
            'username'=>$this->input->post('username')
        );

        $this->db->where('username', $this->input->post('hidden'));
        $this->db->update('users', $data);
    }

    public function delete(){
        $id =  $this->input->POST('id');
        $this->db->where('username', $id);
        $this->db->delete('users');
    }

    public function listUser(){
        $this->db->order_by("username", "asc");
        $data = $this->db->get('users');
        foreach ($data->result() as $row){
            $edit = base_url().'user/edit/';
            $delete = base_url().'user/delete/';
            echo "<tr>
                        <td>$row->username</td>
                        <td>$row->role</td>
                        <td>$row->firstname</td>
                        <td>$row->lastname</td>
                        <td><a href='$edit' data-id='$row->username' class='btnedit' title='edit'><i class='glyphicon glyphicon-pencil' title='edit'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='$delete' data-id='$row->username' class='btndelete' title='delete'><i class='glyphicon glyphicon-remove'></i></a></td>
                    </tr>";
        }
        exit;
    }
}

