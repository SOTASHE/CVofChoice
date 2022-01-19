<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
   class Employer_signup extends CI_Controller{
    function __construct() {
      parent::__construct();
      // Load url helper
      $this->load->helper('url');
      }

      public function index(){
         $this->load->view('Recruiter/header');
         $this->load->view('Recruiter/employer_signup_2');	
         $this->load->view('Recruiter/footer');
    }
  }
