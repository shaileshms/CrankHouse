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

    function __construct()
    {
        parent::__construct();
        $this->load->model('trip_model','',TRUE);
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
        $this->trip_model->listTrip();
    }

    public function deleteTrip(){
        $this->trip_model->delete();
        echo'<div class="alert alert-success">Trip deleted Successfully</div>';
        exit;
    }

    public function addTripView()
    {
        $this->load->view('admin/addTrip');
    }

    public function addTrip()
    {
        $res['error']="";
        $res['success']="";

        $this->form_validation->set_rules('trip', 'Trip name', 'required');

        $id = $this->check_duplicate();

        if ($this->form_validation->run() == FALSE){
            $res['error']='<div class="alert alert-danger">'.validation_errors().'</div>';
        }
        else{
            $this->trip_model->create($id);

            $this->load->model('tripDetail_model','',TRUE);

            $days = $this->input->post('duration');
            for($i=1; $i<=$days;$i++) {
                $tripDetail = new TripDetail_model();
                $tripDetail->trip_id = $id;
                $tripDetail->day = "Day ".$i;
                $tripDetail->day_detail = $this->input->post('day'.$i);
                $tripDetail->create();
            }
            $res['success']='<div class="alert alert-success">Trip added Successfully</div>';
        }
        header('Content-Type: application/json');
        echo json_encode($res);
        exit;
    }

    public function check_duplicate()
    {
        $id = uniqid();

        //query the database
        $result = $this->trip_model->check_tripID($id);

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


}
