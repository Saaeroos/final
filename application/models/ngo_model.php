<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ngo_model extends CI_Model{



  // public function add_ngo($data){

  //  return $this->db->query("INSERT INTO users (name, contact_person, contact_email, fields_of_activity, website, username, password) VALUES (?,?,?,?,?,?,?)",
  //     array('c_name', $c_contact_person, $c_contact_email, $c_fields_activity, $c_website, $c_username, $c_password));
  // }

  public function add_ngo($data) {
    $query = "
      INSERT INTO ngos (name, contact_person, contact_email, fields_of_activity, website, username, password)
      VALUES(?,?,?,?,?,?,?)";

    $values = array($data['c_name'], $data['c_contact_person'], $data['c_contact_email'], $data['c_fields_activity'], $data['c_website'], $data['c_username'], $data['c_password']);
    $this->db->query($query, $data);
  }

    public function m_add_question($data){
      $query = "INSERT INTO questions
                  (title, q_content, when_needed,
                  attachment, ngo_id)
                VALUES (?,?,?,?,?) ";
      $values = array($data['c_title'],
                        $data['c_content'],
                          $data['c_when_needed'],
                            $data['c_attachment'],
                              $data['cUser_id']);
      $this->db->query($query, $values);
      }

      //14-11-2017 mohamed
      public function m_add_comment_ngo($data){
        $query = "INSERT INTO comments (c_content, answer_id, ngo_id)
                  VALUES (?,?,?)";
        $query = array($data['c_comment_text'], $data['a_id'],
                        $data['ngo_id']);
        $this->db->query($query, $values);
      }

      public function m_update_ngo($data) {
        $query = "UPDATE ngos SET name = ?, contact_person = ?, contact_email = ?,
                    fields_of_activity = ?, website = ?, username = ?, password = ?
                  WHERE id = ?";

        $values = array($data['c_name'], $data['c_contact_person'],
                      $data['c_contact_email'], $data['c_fields_activity'],
                      $data['c_website'], $data['c_username'], $data['c_password'], $data['id']);
        $this->db->query($query, $data);
      }

  public function m_delete_ngo($id){
    $query = "DELETE FROM ngos WHERE id=?";
    $this->db->query($query, $id);
  }

}




 ?>
