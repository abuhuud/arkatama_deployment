<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    // $this->load->library('session');
  }

  public function setData()
  {
    $this->session->set_userdata('username', 'Kepala Sekolah');
    $this->session->set_userdata('nama', 'Budi Cahyadi');
    $this->session->set_userdata('level', 'admin');
    $this->session->set_flashdata('pesan', 'Session telah dibuat');
    redirect('user/getdata');
  }

  public function getData()
  {
    $this->data['username'] = $this->session->userdata('username');
    $this->data['nama'] = $this->session->userdata('nama');
    $this->data['level'] = $this->session->userdata('level');
    $this->data['pesan'] = $this->session->flashdata('pesan');
    $this->load->view('view_session', $this->data);
  }

  public function setdata_array()
  {
    $data = [
      'username' => 'Mahasiswa',
      'nama' => 'Abdurrahman Yusya',
      'level' => 'Mahasiswa'
    ];
    $this->session->set_userdata($data);
    echo "Session array berhasil dibuat !";
  }

  public function hapusSession($nama_session = null)
  {
    $this->session->unset_userdata($nama_session);
    $this->session->set_flashdata('pesan', 'Anda berhasil menghapus session !');
    redirect('user/getdata');
  }

  public function view()
  {
    echo "<pre>";
    print_r($this->session->userdata());
    echo "</pre>";
  }

  public function destroy()
  {
    $this->session->sess_destroy();
  }
}
