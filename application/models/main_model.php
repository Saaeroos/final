<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main_model extends CI_Model{

  public function m_get_all_questions(){
    $query = "SELECT * FROM questions LEFT JOIN ngos
              ON questions.ngo_id=ngos.id";
    return $this->db->query($query)->result_array();
  }


public function m_get_one_question($id){
  $query = "SELECT * FROM questions LEFT JOIN ngos
            ON questions.ngo_id=ngos.id";
  return $this->db->query($query)->row_array();
}

}
