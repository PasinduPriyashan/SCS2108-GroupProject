<?php
class Adminmsg_model extends CI_Model{

  public function getMessages(){
    $quary = $this->db->get('contactus');
    return $quary;
  }

}
 ?>
