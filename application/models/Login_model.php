<?php
defined('BASEPATH') or exit('Not Allowed Direct Access');

class Login_model extends CI_Model
{
  public function getData($username = null, $password = null)
  {
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $this->db->limit(1);
    $row = $this->db->get('auth_user');
    return $row;
  }
}
