<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
   class Employer_signup extends CI_Controller{
    function __construct() {
      parent::__construct();
      // Load url helper
      $this->load->helper('url');
      }

      public function index(){
            
        $this->load->view('employer_signup_2');	
    }
  }
