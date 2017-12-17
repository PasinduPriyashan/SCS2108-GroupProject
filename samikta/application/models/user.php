<?php
/**
 *
 */
class User extends CI_Model
{

  function regUser(){
    
      $data = array(

        'fname'   => $this->input->post('fname',TRUE),
        'mname'   => $this->input->post('fname',TRUE),
        'lname'   => $this->input->post('fname',TRUE),
        'nic'     => $this->input->post('fname',TRUE),
        'email'   => $this->input->post('fname',TRUE),
        'dob'     => $this->input->post('fname',TRUE),
        'contact' => $this->input->post('fname',TRUE)
      );

      $result =  $this->db->insert('userdetail',$data);
      

      if($result){
        $id = $this->db->insert_id();
        return $id;
      }else{
        return false;
      }

  }



  function createLogin($id){
    
      $data = array(

        'userName'   => $this->input->post('fname',TRUE),
        'password'   => $this->input->post('fname',TRUE),
        'userType'   => $this->input->post('fname',TRUE),
        'udID'       => $id
      );

      return $this->db->insert('user',$data);

  }

  function checkLogin(){
    
      $uname = $this->input->post('username');
      $pass  = $this->input->post('password');

      $this->db->where('username',$uname);
      $this->db->where('password',$pass);

      $result = $this->db->get('user');

      if($result->num_rows()==1){
        return $result->row(0);
      }else{
        return false;
      }

  }




}


 ?>
