<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main_model extends CI_Model{

  public function m_get_all_questions(){
    $query = "SELECT * FROM questions LEFT JOIN ngos
              ON questions.ngo_id=ngos.id";
    return $this->db->query($query)->result_array();
  }

public function m_get_20_questions(){
    $query = "
      SELECT *, questions.id AS question_id
      FROM questions
      LEFT JOIN ngos ON questions.ngo_id=ngos.id
      ORDER BY  questions.created_at DESC
      LIMIT 20";
    return $this->db->query($query)->result_array();
  }

public function m_get_one_question($id){
  $query = "SELECT * FROM questions LEFT JOIN ngos
            ON questions.ngo_id=ngos.id";
  return $this->db->query($query)->row_array();
}

public function m_get_one_question_by_id($id){
  // the $id was not used yet in the query
  $query = "SELECT * FROM questions LEFT JOIN ngos
            ON questions.ngo_id=ngos.id WHERE questions.id = ?";
  return $this->db->query($query, array($id))->row_array();
}

}
