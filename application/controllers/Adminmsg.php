<?php
 /**
  *
  */
 class Adminmsg extends CI_Controller
 {

   public function index(){
     $this->load->model('Adminmsg_model');
     $data["fetch_data"]=$this->Adminmsg_model->getMessages();
     $this->load->view('admin_viewmessages',$data);

   }
 }

 ?>
