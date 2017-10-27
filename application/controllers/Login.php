<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required|callback_check_data');
		if($this->form_validation->run()==false){
			$this->load->view('login_view');

		}else{
			redirect(base_url('index.php/home'),'refresh');
		}
	
	}

	function check_data($password){
		

		if(empty($password)){
			$this->form_validation->set_message('check_data','<i>password is required</i>');
			return false; 
		}
		$username = $this->input->post('username');
		if(empty($username)){
			$this->form_validation->set_message('check_data','<i>Username is required</i>');
			return false; 
		}

		
		$result = $this->login->login($username,$password);
		

		if($result){
			
			$sess_array= array();
			foreach ($result as $row) {
				$sess_array = $arrayName = array('id'=> $row->id,'username'=> $row->username,'email'=>$row->email,'usertype'=>$row->usertype);
				$this->session->set_userdata('logged_in',$sess_array);
			}
			return true;
		}else{
			$this->form_validation->set_message('check_data','<i>Invalid username or password</i>');
			return false; 
		}
	}

	public function register(){

		if($this->input->post('daftar')){
			$this->login->register();
			redirect('login');
		}else{
			$this->load->view('register_main');
		}


	}
	public function register_red(){

		
			$this->load->view('register_view');
		

	}
	public function user_login(){

		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required|callback_check_data');
		if($this->form_validation->run()==false){
			$this->load->view('login_view');

		}else{
			redirect(base_url('index.php/home'),'refresh');
		}

	}
}
 