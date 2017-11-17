<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model{

  public function m_list_of_ngo(){
    $query = "SELECT * FROM ngos where ngos.approved=?
                ORDER BY created_at DESC";
    return $this->db->query($query, 1)->result_array();
  }

  public function m_list_of_eng(){
    $query = "SELECT * FROM engineers WHERE engineers.approved=?
              ORDER BY created_at DESC";
    return $this->db->query($query, 1)->result_array();
  }

  public function m_list_of_questions(){
    $query = "SELECT questions.*, questions.id AS q_id, ngos.id AS ngoid, ngos.name AS ngoname
                FROM questions
                LEFT join ngos
                 ON questions.ngo_id=ngos.id
                 ORDER BY questions.updated_at DESC";
    return $this->db->query($query)->result_array();
  }

  public function m_list_of_answers(){
    $query = "SELECT *, answers.id AS a_id FROM answers
                LEFT join engineers
                 ON answers.engineer_id=engineers.id
                 LEFT JOIN questions
                 ON answers.question_id=questions.id
                 ORDER BY answers.updated_at DESC";
    return $this->db->query($query)->result_array();
  }

  public function m_list_of_comments(){
    $query = "SELECT *,comments.id AS c_id FROM comments
                LEFT join ngos
                    ON comments.ngo_id=ngos.id
                LEFT join engineers
                    ON comments.engineer_id=engineers.id
                    ORDER BY comments.created_at DESC";
    return $this->db->query($query)->result_array();
  }

  public function m_list_of_ngo_newforms(){
    $query = "SELECT * FROM ngos
              WHERE ngos.approved=?
              ORDER BY created_at DESC";
    return $this->db->query($query, 0)->result_array();
  }

  public function m_list_of_eng_newforms(){
    $query = "SELECT * FROM engineers
              WHERE engineers.approved=?
              ORDER BY created_at DESC";
    return $this->db->query($query, 0)->result_array();
  }

  //need some work

  // public function m_platform_all_question(){
  //   $query="SELECT * FROM questions
  //             LEFT JOIN ngos
  //             ON questions.ngo_id=ngos.id
  //             ORDER BY created_at DESC";
  //   return $this->db->query($query);
  // }
  //
  // public function m_platform_detailed_q($id){
  //   $query = "SELECT * FROM answers
  //             LEFT JOIN questions
  //             ON answers.question_id=questions.id
  //             WHERE question_id=?";
  //   $values = $id;
  //
  // }


//delete functions
  public function m_delete_ngo($id){
    $query = "DELETE FROM ngos WHERE ngos.id=?";
    $this->db->query($query, $id);
  }

  public function m_delete_eng($id){
    $query = "DELETE FROM engineers WHERE engineers.id=?";
    $this->db->query($query, $id);
  }

  public function m_delete_question($id){
    $query = "DELETE FROM questions WHERE questions.id=?";
    $this->db->query($query, $id);
  }

  public function m_delete_answer($id){
    $query = "DELETE FROM answers WHERE answers.id=?";
    $this->db->query($query, $id);
  }

  public function m_delete_comment($id){
    $query = "DELETE FROM comments WHERE comments.id=?";
    $this->db->query($query, $id);
  }

  //edit functions
    public function m_update_question($data){
      $query = "UPDATE questions SET q_content =?
                WHERE questions.id=?";
      $values = array($data['q_content'], $data['q_id']);
      return $this->db->query($query, $values);
    }

    public function m_update_answer($data){
      $query = "UPDATE answers SET a_content =?
                WHERE answers.id=?";
      $values = array($data['a_content'], $data['a_id']);
      return $this->db->query($query, $values);
    }

    public function m_update_comment($data){
      $query = "UPDATE questions SET q_content =?
                WHERE questions.id=?";
      $values = array($data['c_content'], $data['c_id']);
      return $this->db->query($query, $values);
    }

    //aprove ngos and engineers
    public function m_approve_ngo($id){
      $query = "UPDATE ngos SET approved=?
                WHERE ngos.id=?";
      $values = array(1, $id);
      $this->db->query($query, $values);
    }

    public function m_approve_eng($id){
      $query = "UPDATE engineers SET approved=?
                WHERE engineers.id=?";
      $values = array(1, $id);
      $this->db->query($query, $values);
    }

    public function m_eng_details($id){
      $query = "SELECT * FROM engineers
                WHERE engineers.id=?";
     return $this->db->query($query, $id)->row_array();
    }

    public function m_ngo_details($id){
      $query = "SELECT * FROM ngos
                WHERE ngos.id=?";
     return $this->db->query($query, $id)->row_array();
    }

  }




 ?>
