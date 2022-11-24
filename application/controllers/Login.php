<?php
defined('BASEPATH') or exit('Not Allowed Direct Access');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('otentifikasi_model');
    }

    public function index()
    {
        $this->load->view('login/login');
    }

    public function cek_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        //cek dengan database
        $result = $this->login_model->getData($username, $password);
        $num_rows = $result->num_rows();
        if ($num_rows == 1) {
            $data = $result->row();
            $this->session->set_userdata('nama', $data->nama_lengkap);
            redirect('administrator/dashboard');
        } else {
            $this->session->set_flashdata('warning', 'Username / password salah !');
            redirect('login');
        }
    }

    public function proses_login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        //cek dengan database
        //cek username dulu baru password, atau langsung cek keduanya
        //fungsi cek keduanya

        $result = $this->otentifikasi_model->cek_login($username, $password);
        //jumlah hasil query
        if ($result->num_rows() > 0) {
            $data = $result->row();

            $data_session = [
                'username' => $data->username,
                'nama_lengkap' => $data->nama_lengkap,
                'level' => $data->level
            ];
            $this->session->set_userdata($data_session);
            redirect('administrator/dashboard');
        } else {
            $this->session->set_flashdata('failed', 'Username / password anda salah !');
            redirect(base_url());
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
