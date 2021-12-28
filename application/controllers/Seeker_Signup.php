<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
   class Seeker_Signup extends CI_Controller{
    function __construct() {
      parent::__construct();
      // Load url helper
      $this->load->helper('url');
      }
    public function index(){
      $this->load->view('signup');	
    }

    public function signup_2(){
      $this->load->view('signup_2');	
    }

    public function signup_3(){
      $this->load->view('signup_3');	
    }
}