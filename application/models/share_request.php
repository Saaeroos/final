<?php

class Share_request extends CI_Model{

  public function m_update_status($id, $new_status){
    $query = "UPDATE share_request
              SET status = ?
              WHERE id=?";
    $values = array($new_status, $id);
    return $this->db->query($query, $values);


  }
}