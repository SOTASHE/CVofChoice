<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
Class Seeker_feed extends CI_Controller{
    function __construct() {
        parent::__construct();
        // Load url helper
        $this->load->helper('url');
        }
        
    function index(){
    //loading the template
       $this->load->view('Seeker/feed_header');
       $this->load->view('Seeker/feed');
       $this->load->view('Seeker/footer');
}
}
?>