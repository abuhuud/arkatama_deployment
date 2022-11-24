<?php

defined('BASEPATH') or exit('Not Allowed Direct Access');

class Otentifikasi_model extends CI_Model
{
  public function cek_login($username = null, $password = null)
  {
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $data = $this->db->get('auth_user');
    //jumlah baris
    //value
    return  $data;
  }
}
