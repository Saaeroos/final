<?php

class User extends CI_Model {
  public function loginByUsernamePass($username, $password) {
    $query = "SELECT id, username, password, 'engineer' AS role
      FROM engineers
      WHERE username = ?
      AND password = ?
      UNION
      SELECT id, username, password, 'ngo' AS role
      FROM ngos
      WHERE username = ?
      AND password = ?;";
    $values = array($username, $password, $username, $password);
    return $this->db->query($query, $values)->row_array();
  }

}
