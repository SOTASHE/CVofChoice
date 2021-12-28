<?php
Class About_us extends CI_Controller{
function index(){
//Loading url helper
    $this->load->helper('url');
    $this->load->view('about');
}
}
?>