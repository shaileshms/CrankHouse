<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class trips extends CI_Controller {

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
    public function index()
    {
        $this->load->model('trip_model','',TRUE);
        $this->load->model('tripDetail_model','',TRUE);

//        $id =$_GET['id'];
//        $this->db->where('trip_id',$id);
//        $data['details'] = $this->db->get('trip_details');
//
//        echo $id;
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


//
//    public function annapurna()
//    {
//        $this->load->view('annapurna-mountain-bike-trip');
//    }
//    public function jomsom()
//    {
//        $this->load->view('jomsom-muktinath-mountain-bike-trip');
//    }
//    public function kathmandu()
//    {
//        $this->load->view('kathmandu-mountain-bike-trip');
//    }
//    public function kathmanduround()
//    {
//        $this->load->view('kathmandu-round-mountain-bike-trip');
//    }
//    public function pokhara()
//    {
//        $this->load->view('pokhara-mountain-bike-trip');
//    }
//    public function classicnepal()
//    {
//        $this->load->view('classic-nepal-mountain-bike-trip');
//    }
}