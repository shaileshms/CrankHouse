<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crankhouse extends CI_Controller {

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
        $this->load->view('index');
    }

    public function contact()
    {
        header('Access-Control-Allow-Origin: *');
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = 'Message from website';
        $to = 'info@crankhousenepal.com';
        $subject = 'Message from website';


        $body ="From: $name\n E-Mail: $email\n Message:\n $message";

        if (mail ($to, $subject, $body, $from)) {
            echo 'Thank You! we will be in touch';
        } else {
            echo 'Oops... Please try again later';
        }

    }

    public function gallery()
    {
        $this->load->view('gallery');
    }
}
