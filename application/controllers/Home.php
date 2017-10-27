<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{

		 if($this->session->userdata('logged_in')){
		 	$session_data = $this->session->userdata('logged_in');
		 	$data['id'] = $session_data['id'];
		 	$data['email'] = $session_data['email'];
		 	$data['username'] = $session_data['username'];
		 	$data['usertype'] = $session_data['usertype'];
		 	
		 		$this->load->view('admin',$data);
		 	
		 	
		 }else{
		 	$this->load->view('home');
		 }
	}
	public function logout(){
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect(site_url('home'),'refresh');
	}

	
}
 