<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function login($username,$password){
		$this->db->select('id','email','username','password','usertype');
		$this->db->from('user');
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));
		$this->db->limit('1');

		$query=$this->db->get();
		if($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}

	}

	function register(){
		$fn = $this->input->post('email');
		$un = $this->input->post('username');
		$pw = $this->input->post('password');
		$data = array(
				'id' => '',
				'email' => $fn,
				'username' => $un,
				'password' => md5($pw)
		); 			
		$this->db->insert('user',$data);
	}
}
