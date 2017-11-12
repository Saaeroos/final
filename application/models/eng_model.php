<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eng_model extends CI_Model{

  public function add_eng($data){
    $query = "INSERT INTO engineers
              (name, phone, email, fields_of_experties,
                  photo, linkedin_link, about_me,
                    username, password)
              VALUES(?,?,?,?,?,?,?,?,?)";
    $values = ($data['c_name'],    $data['c_phone'],
               $data['c_email'],   $data['c_fields_experties'],
               $data['c_photo'],   $data['c_aboutme'],
               $data['c_username'],$data['c_password']);
    $this->db->query($query, $values);


  }

}




 ?>
