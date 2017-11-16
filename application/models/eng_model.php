<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eng_model extends CI_Model{

  public function add_eng($data){
    $query = "INSERT INTO engineers
      (name, phone, email, fields_of_expertise, photo, linkedin_link, about_me, username, password)
      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
    ";

    $password_hash = password_hash($data['c_password'], PASSWORD_DEFAULT);

    $values = array($data['c_name'],    $data['c_phone'],
               $data['c_email'],   $data['c_fields_expertise'],
               $data['c_photo'], $data['c_form_linkedin'], $data['c_aboutme'],
               $data['c_username'],$password_hash);
    $this->db->query($query, $values);
  }


  //14-11-2017 mohamed
  public function m_add_answer($data){
    $query = "INSERT INTO answers(a_content, question_id, engineer_id)
              VALUES (?,?,?)";
    $values = array($data['c_a_content'], $data['c_q_id'],
                    $data['c_eng_id']);
    $this->db->query($query, $values);

  }

  public function m_add_comment_eng($data){
    $query = "INSERT INTO comments (c_content, answer_id, engineer_id)
              VALUES (?,?,?)";
    $values = array($data['c_comment_text'], $data['a_id'],
                    $data['eng_id']);
    $this->db->query($query, $values);
  }

  //15-11-2017 mohamed
  public function select_one_eng($id){
    $query = "SELECT * FROM engineers WHERE id=?";
    return $this->db->query($query, $id)->row_array();
  }

  public function m_update_eng($data){
    $query = "UPDATE engineers SET (name, phone, email,
                fields_of_expertise, photo, linkedin_link,
                  about_me, username, password)
      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    // UPDATE questions SET q_content =?
    //           WHERE questions.id=?";
    $values = array($data['c_name'],    $data['c_phone'],
               $data['c_email'],   $data['c_fields_expertise'],
               $data['c_photo'], $data['c_form_linkedin'], $data['c_aboutme'],
               $data['c_username'],$data['c_password']);
    return $this->db->query($query, $values);
  }
  public function m_delete_eng($id){
    $query = "DELETE FROM engineers WHERE id=?";
    $this->db->query($query, $id);
  }
}
