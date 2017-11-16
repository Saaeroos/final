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

public function get_question_by_id($id){
  $query = "SELECT * FROM questions WHERE id = ?";
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
            ON comments.ngo_id=ngos.id
            WHERE comments.answer_id=?";
    return $this->db->query($query, $a_id)->result_array();
  }
  else{
    $query="SELECT * FROM comments LEFT JOIN answers
            ON comments.answer_id=answers.id
            LEFT JOIN engineers
            ON comments.engineer_id=engineers.id
            WHERE comments.answer_id=?";
    return $this->db->query($query, $a_id)->result_array();
  }

}

  public function m_eng_details($id) {
    $query = "SELECT * FROM engineers WHERE id = ?";
    $values = array($id);
    return $this->db->query($query, $values)->row_array();
  }

  public function m_ngo_details($id) {
    $query = "SELECT * FROM ngos WHERE id = ?";
    $values = array($id);
    return $this->db->query($query, $values)->row_array();
  }

    public function get_comments_for_answer($answer_id){
      $query = "  SELECT  comments.id, comments.c_content,
        comments.created_at,ngos.name AS ngo_name,    ngos.contact_person AS ngo_contact_person,   engineers.name AS engineer_name
        FROM comments
        LEFT JOIN answers ON comments.answer_id =answers.id LEFT JOIN ngos ON comments.ngo_id   =ngos.id
        LEFT JOIN engineers ON comments.engineer_id= engineers.id WHERE comments.answer_id = ?";

      return $this->db->query($query, $answer_id)->result_array();
    }

public function get_answers_for_question($question_id){
  $query = "SELECT answers.id, answers.a_content,answers.created_at,  engineers.name AS engineer_name, engineers.id AS engineer_id
    FROM answers
    LEFT JOIN engineers ON answers.engineer_id=engineers.id
    WHERE answers.question_id=?
  ";

 return $this->db->query($query, $question_id)->result_array();
}

public function insert_share_request($engineer_id, $ngo_id) {
  $query ="INSERT INTO share_request (engineer_id, ngo_id, status)
  VALUES(?, ?, ?)";
  $values = array($engineer_id, $ngo_id, 'new');
  $this->db->query($query, $values);
}

public function get_all_share_request_ngo($ngo_id){

$query="SELECT * FROM  share_request
LEFT JOIN engineers ON share_request.engineer_id=engineers.id
WHERE ngo_id = ?";

return $this->db->query($query, $ngo_id)->result_array();

}
public function get_all_share_request_eng($eng_id){

$query="SELECT * FROM  share_request
LEFT JOIN ngos ON share_request.ngo_id = ngos.id
WHERE engineer_id= ?";

return $this->db->query($query, $eng_id)->result_array();

}



}
