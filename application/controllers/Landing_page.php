<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
Class Landing_page extends CI_Controller{
    function __construct() {
        parent::__construct();
        // Load url helper
        $this->load->helper('url');
        }
        
    function index(){
    //loading the welcome page
       $this->load->view('landing_page');
}
}
?>