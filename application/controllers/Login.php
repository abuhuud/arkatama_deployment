<?php
defined('BASEPATH') or exit('Not Allowed Direct Access');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');

        if (!isset($this->sesion->userdata('username'))) {
            redirect(base_url('administrator/dashboard'));
        }
    }

    public function index()
    {
        $this->load->view('login/login');
    }

    public function cekproses()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        //cek dengan database
        $cek = $this->auth_model->cek_login($username, $password);

        $jumlah_result = $cek->num_rows();
        if ($jumlah_result > 0) {
            // menyimpan data user ke session
            // arahkan pada administrator/dashboard
            $row = $cek->row();
            $data_array = array(
                'username' => $row->username,
                'nama_lengkap' => $row->nama_lengkap,
                'level' => $row->level
            );
            $this->session->set_userdata($data_array);
            redirect(base_url('administrator/dashboard'));
        } else {
            $this->session->set_flashdata('warning', 'Username atau Password tidak sesuai');
            redirect(base_url());
        }
    }

    public function view()
    {
        echo "<pre>";

        echo "</pre>";
    }
}
