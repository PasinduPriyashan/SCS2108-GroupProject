<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Contact extends CI_Controller{
	public function index(){

		$this->load->view('contact');
	}
	public function insert(){
		//echo "Hello";
		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstName','First Name','required');
		$this->form_validation->set_rules('lastName','Last Name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('message','Message','required');



		if ($this->form_validation->run()) {

			$this->load->model('User');
			$contactInfo=array(
				"firstName"=>$this->input->post("firstName"),
				"lastName"=>$this->input->post("lastName"),
				"email"=>$this->input->post("email"),
				"subject"=>$this->input->post("subject"),
				"website"=>$this->input->post("website"),
				"message"=>$this->input->post("message")

			);
			$this->User->contactUs($contactInfo);
			redirect(site_url('Contact/index'));
		}else{
			$this->index();
		}
	}
	
	
}
?>