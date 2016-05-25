<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    private $_uploaded;

    function __construct()
    {
        parent::__construct();
        $this->load->model('Trip_model','',TRUE);
        $this->load->model('Tripdetail_model','',TRUE);
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function main()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

            $this->load->view('admin/main');

        }
        else
        {
            //If no session, redirect to login page
            redirect('admin', 'refresh');
        }

    }

    public function trip()
    {
        $this->load->view('admin/trip');
    }

    public function listTrip(){
        $this->Trip_model->listTrip();
    }

    public function deleteTrip(){
        $this->Trip_model->delete();
        echo'<div class="alert alert-success">Trip deleted Successfully</div>';
        exit;
    }

    public function editTrip(){
        $id =  $this->uri->segment(3);
        $this->db->where('id',$id);
        $data['trip'] = $this->db->get('trips');

        $this->db->where('trip_id',$id);
        $data['detail'] = $this->db->get('trip_details');
        $data['id'] = $id;
        $this->load->view('admin/editTrip', $data);
    }

    public function addTripView()
    {
        $this->load->view('admin/addTrip');
    }

    public function gallery()
    {
        $this->load->view('admin/gallery');
    }

    public function addPhotos()
    {
        $res['error']="";
        $res['success']="";

        //now we set a callback as rule for the upload field
        $this->form_validation->set_rules('uploadedimages[]','Upload image','callback_photoupload_check');
        if ($this->form_validation->run() == FALSE){
            $res['error']='<div class="alert alert-danger">'.validation_errors().'</div>';
        }
        else{
            $res['success']='<div class="alert alert-success">Photos added Successfully</div>';
        }
        header('Content-Type: application/json');
        echo json_encode($res);
        exit;
    }

    public function addTrip()
    {
        $res['error']="";
        $res['success']="";

        $this->form_validation->set_rules('trip', 'Trip name', 'required');

        //now we set a callback as rule for the upload field
        $this->form_validation->set_rules('uploadedimages[]','Upload image','callback_fileupload_check');

        $id = $this->check_duplicate();

        if ($this->form_validation->run() == FALSE){
            $res['error']='<div class="alert alert-danger">'.validation_errors().'</div>';
        }
        else{
            $this->Trip_model->create($id,$this->_uploaded);

            $this->load->model('Tripdetail_model','',TRUE);

            $days = $this->input->post('duration');
            for($i=1; $i<=$days;$i++) {
                $tripDetail = new Tripdetail_model();
                $tripDetail->trip_id = $id;
                $tripDetail->day = "Day ".$i;
                $tripDetail->day_detail = $this->db->escape_str($this->input->post('day'.$i));
                $tripDetail->create();
            }
            $res['success']='<div class="alert alert-success">Trip added Successfully</div>';
        }
        header('Content-Type: application/json');
        echo json_encode($res);
        exit;
    }

    public function updateTrip(){
        $res['error']="";
        $res['success']="";

        $this->form_validation->set_rules('tripName', 'Trip Name', 'required');

        if ($this->form_validation->run() == FALSE){
            $res['error']='<div class="alert alert-danger">'.validation_errors().'</div>';
        }
        else{
            $this->Trip_model->update();

            $days = $this->input->post('duration');
            $id=$this->input->post('hidden');

            $this->db->where('trip_id', $id);
            $this->db->delete('trip_details');

            for($i=1; $i<=$days; $i++) {
                $tripDetail = new Tripdetail_model();
                $tripDetail->trip_id = $id;
                $tripDetail->day = "Day ".$i;
                $tripDetail->day_detail = $this->db->escape_str($this->input->post('day'.$i));
                $tripDetail->create();
            }

            $res['success'] = '<div class="alert alert-success">Trip Updated Successfully</div>';
        }
        header('Content-Type: application/json');
        echo json_encode($res);
        exit;
    }

    public function check_duplicate()
    {
        $id = uniqid();

        //query the database
        $result = $this->Trip_model->check_tripID($id);

        if($result)
        {
            $this->check_duplicate();
        }
        else
        {
            return $id;
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('admin', 'refresh');
    }

    // now the callback validation that deals with the upload of files
    public function fileupload_check()
    {

        // we retrieve the number of files that were uploaded

        $number_of_files = sizeof($_FILES['uploadedimages']['tmp_name']);
        // considering that do_upload() accepts single files, we will have to do a small hack so that we can upload multiple files. For this we will have to keep the data of uploaded files in a variable, and redo the $_FILE.
        $files = $_FILES['uploadedimages'];

        // first make sure that there is no error in uploading the files
        for($i=0;$i<$number_of_files;$i++)
        {
            if($_FILES['uploadedimages']['error'][$i] != 0)
            {
                // save the error message and return false, the validation of uploaded files failed
                $this->form_validation->set_message('fileupload_check', 'Couldn\'t upload the file(s)');
                return FALSE;
            }
        }

        // we first load the upload library
        $this->load->library('upload');
        // next we pass the upload path for the images
        $config['upload_path'] = FCPATH . 'assets/img/trips';
        // also, we make sure we allow only certain type of images
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        // now, taking into account that there can be more than one file, for each file we will have to do the upload
        for ($i = 0; $i < $number_of_files; $i++)
        {
            $_FILES['uploadedimage']['name'] = $files['name'][$i];
            $_FILES['uploadedimage']['type'] = $files['type'][$i];
            $_FILES['uploadedimage']['tmp_name'] = $files['tmp_name'][$i];
            $_FILES['uploadedimage']['error'] = $files['error'][$i];
            $_FILES['uploadedimage']['size'] = $files['size'][$i];

            //now we initialize the upload library
            $this->upload->initialize($config);
            if ($this->upload->do_upload('uploadedimage'))
            {
                $this->_uploaded[$i] = $this->upload->data();
            }
            else
            {
                $this->form_validation->set_message('fileupload_check', $this->upload->display_errors());
                return FALSE;
            }
        }
//        $this->form_validation->set_message($this->_uploaded);
        return TRUE;
    }


    // now the callback validation that deals with the upload of files
    public function photoupload_check()
    {

        // we retrieve the number of files that were uploaded

        $number_of_files = sizeof($_FILES['uploadedimages']['tmp_name']);
        // considering that do_upload() accepts single files, we will have to do a small hack so that we can upload multiple files. For this we will have to keep the data of uploaded files in a variable, and redo the $_FILE.
        $files = $_FILES['uploadedimages'];

        // first make sure that there is no error in uploading the files
        for($i=0;$i<$number_of_files;$i++)
        {
            if($_FILES['uploadedimages']['error'][$i] != 0)
            {
                // save the error message and return false, the validation of uploaded files failed
                $this->form_validation->set_message('photoupload_check', 'Couldn\'t upload the file(s)');
                return FALSE;
            }
        }

        // we first load the upload library
        $this->load->library('upload');
        // next we pass the upload path for the images
        $config['upload_path'] = FCPATH . 'assets/img/gallery';
        // also, we make sure we allow only certain type of images
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        // now, taking into account that there can be more than one file, for each file we will have to do the upload
        for ($i = 0; $i < $number_of_files; $i++)
        {
            $_FILES['uploadedimage']['name'] = $files['name'][$i];
            $_FILES['uploadedimage']['type'] = $files['type'][$i];
            $_FILES['uploadedimage']['tmp_name'] = $files['tmp_name'][$i];
            $_FILES['uploadedimage']['error'] = $files['error'][$i];
            $_FILES['uploadedimage']['size'] = $files['size'][$i];

            //now we initialize the upload library
            $this->upload->initialize($config);
            if ($this->upload->do_upload('uploadedimage'))
            {
                $this->_uploaded[$i] = $this->upload->data();
            }
            else
            {
                $this->form_validation->set_message('fileupload_check', $this->upload->display_errors());
                return FALSE;
            }
        }
//        $this->form_validation->set_message($this->_uploaded);
        return TRUE;
    }

}
