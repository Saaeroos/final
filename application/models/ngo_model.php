<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ngo_model extends CI_Model{

  public function add_ngo($data){
    $query = "INSERT INTO ngos
              (name, contact_person, contact_email, fields_of_activity,
                  website, username, password)
              VALUES(?,?,?,?,?,?,?,)";
    $values = ($data['c_name'],    $data['c_contact_person'],
               $data['c_contacnt_email'],   $data['c_fields_activity'],
               $data['c_website'],   $data['c_username'],
               $data['c_password']);
    $this->db->query($query, $values);
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
}




 ?>
