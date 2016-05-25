<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trips extends CI_Controller {

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
        $this->load->model('Trip_model','',TRUE);
        $this->load->model('Tripdetail_model','',TRUE);
    }
    
    public function index()
    {
        $data['trips'] = $this->db->get('trips');
        $this->load->view('mountain-bike-trip',$data);
    }

    public function detail()
    {
        $id=$_POST['id'];
        echo("<script>console.log('id: ".$id."');</script>");
        $this->load->model('trip_model','',TRUE);
        $this->db->where('id',$id);
        $data['trips'] = $this->db->get('trips');

        $this->load->model('tripDetail_model','',TRUE);
        $this->db->where('trip_id',$id);
        $data['details'] = $this->db->get('trip_details');

        $this->load->view('mountain-bike-trip-detail',$data);

    }
}