<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
   class Seeker_Signup extends CI_Controller{
    function __construct() {
      parent::__construct();
      $this->load->helper(array('url','html'));
      $this->load->library(array('session','form_validation'));
      $this->load->database();
      $this->load->model('Seeker_signup');
      }
    public function index(){

       // set form validation rules
       $this->form_validation->set_rules('contact', 'Contact', 'trim|required|digit|min_length[10]|max_length[10]|xss_clean');
       $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[user.email]');
       $this->form_validation->set_rules('password', 'Password', 'trim|required|md5');


       $this->load->view('Seeker/header');	
       $this->load->view('Seeker/signup');	
       $this->load->view('Seeker/footer');	
    }

}