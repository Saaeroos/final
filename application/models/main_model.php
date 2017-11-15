<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main_model extends CI_Model{

  public function m_get_all_questions(){
    $query = "SELECT * FROM questions LEFT JOIN ngos
              ON questions.ngo_id=ngos.id";
    return $this->db->query($query)->result_array();
  }

public function m_get_20_questions(){
    $query = "SELECT *, questions.id AS question_id
      FROM questions
      LEFT JOIN ngos ON questions.ngo_id=ngos.id
      ORDER BY  questions.created_at DESC
      LIMIT 20";
    return $this->db->query($query)->result_array();
  }

// public function get_question_by_id($id){
//   $query = "SELECT * FROM questions LEFT JOIN ngos
//             ON questions.ngo_id=ngos.id
//             WHERE questions.id=?";
//   return $this->db->query($query, $id)->row_array();
// }

public function m_get_one_question_by_id($id){
  // the $id was not used yet in the query above
  $query = "SELECT *, questions.id AS question_id FROM questions LEFT JOIN ngos
            ON questions.ngo_id=ngos.id WHERE questions.id = ?";
  return $this->db->query($query, array($id))->row_array();
}


public function get_answers_by_q_id($q_id){
  $query = "SELECT * FROM answers LEFT JOIN engineers
            ON answers.engineer_id=engineers.id
            WHERE answers.question_id=?";
 return $this->db->query($query, $q_id)->result_array();
}


public function get_comments_by_answer_id($a_id){
$query = "SELECT engineer_id FROM comments
          WHERE answer_id=?";
$result = $this->db->query($query, $a_id)->row_array();

  if($result == NULL){
    $query="SELECT * FROM comments LEFT JOIN answers
            ON comments.answer_id=answers.id
            LEFT JOIN ngos
            ON commnets.ngo_id=ngos.id
            WHERE comments.answer_id=?";
    return $this->db->query($query, $a_id)->result_array();
  }
  else{
    $query="SELECT * FROM comments LEFT JOIN answers
            ON comments.answer_id=answers.id
            LEFT JOIN engineers
            ON commnets.engineer_id=engineers.id
            WHERE comments.answer_id=?";
    return $this->db->query($query, $a_id)->result_array();
  }

}

}
