<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
Class Employer_feed extends CI_Controller{
    function __construct() {
        parent::__construct();
        // Load url helper
        $this->load->helper('url');
        }
        
    function index(){
    //loading the welcome page
       $this->load->view('Recruiter/feed_header');
       $this->load->view('Recruiter/feed');
       $this->load->view('Recruiter/footer');
}
}
?>