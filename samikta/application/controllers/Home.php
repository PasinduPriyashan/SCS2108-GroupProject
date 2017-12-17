<?php
/**
 *
 */
class Home extends CI_Controller
{

  public function index(){
    $this->load->view('index');
  }
  public function contact(){
    $this->load->view('contact');
  }
  public function about(){
    $this->load->view('about');
  }
  public function services(){
    $this->load->view('services');
  }
  public function projects(){
    $this->load->view('projects');
  }
  public function login(){
    $this->load->view('login');
  }
  public function empty1(){
    $this->load->view('empty');
  }
  public function register(){
    $this->load->view('register');
  }

  

  
}

 ?>
