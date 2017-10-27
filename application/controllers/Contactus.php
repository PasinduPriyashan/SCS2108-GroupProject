<?php
/**
 *
 */
class Contactus extends CI_controller
{

  public function index()
  {
    $this->load->view('Contactus');
  }

  public function inputContactusData(){
    $this->load->model('Contactus_model');
    $result = $this->Contactus_model->getContactData();

    if($result){
      $this->session->set_flashdata('msg','Your message has been sent!');
      redirect('Contact/Contactus/');
    }
    else {
      $this->session->set_flashdata('msg1','Sorry.Something wrong! Try again later');
      redirect('Contact/Contactus/');
    }
  }
}

 ?>
