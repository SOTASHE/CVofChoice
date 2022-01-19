<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
Class Landing_page extends CI_Controller{
    function __construct() {
        parent::__construct();
        // Load url helper
          $this->load->helper('url','html');
          $this->load->library('session');
        }
        
    function index(){
    //loading the welcome page
       $this->load->view('landing_header');
       $this->load->view('landing_page');
       $this->load->view('landing_footer');
}
     function logout() {
  // destroy session
        $data = array('login' => '', 'uname' => '', 'uid' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
        redirect('Landing_page');
 }

}
?>