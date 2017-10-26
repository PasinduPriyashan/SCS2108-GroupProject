<?php

class Contactus_model extends CI_Model
{

  public function getContactData(){
    $data = array(
      'Firstname' => $this->input->post('name',TRUE),
      'Lastname' => $this->input->post('surname',TRUE),
      'Email' => $this->input->post('email',TRUE),
      'Phone' => $this->input->post('phone',TRUE),
      'Message' => $this->input->post('message',TRUE)

    );

    return $this->db->insert('contactus',$data);

  }
}

 ?>
