<?php

defined('BASEPATH') or exit('Not Allowed Direct Access');

class Mahasiswa extends CI_Controller{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('mahasiswa_model');
    }

    public function index(){
        $this->data['mahasiswa'] = $this->mahasiswa_model->getdata();
        $this->data['title'] = 'Data Mahasiswa';

        $this->template->load('mahasiswa/list-mahasiswa',$this->data);
        
    }

    public function add(){
        $this->data['title'] = 'Tambah Data';
        $this->template->load('mahasiswa/add', $this->data);
    }

    public function add_save(){

        $data =array(
            'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
            'kota_asal'     => $this->input->post('kota_asal'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir')

        );

        $simpan = $this->db->insert('mahasiswa',$data);

        
        if($simpan){
            redirect('administrator/mahasiswa');
        }
        else{
            echo "Tidak Bisa Input Data";
        }

    }

    public function edit($id){
        $this->data['mahasiswa'] = $this->mahasiswa_model->edit($id);
        $this->data['title']    = 'Edit Data';
        $this->template->load('mahasiswa/edit',$this->data);
    }

    public function edit_save(){
        $data= array(
            'nama_mahasiswa'    => $this->input->post('nama_mahasiswa'),
            'kota_asal'     => $this->input->post('kota_asal'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir')
        );
        $update = $this->mahasiswa_model->edit_save($data,$this->input->post('id'));
        if($update){
            echo "<script>alert('Data berhasil dirubah')</script>";
            redirect('administrator/mahasiswa');
        }
        else{
            echo "Data tidak bisa dirubah";
        }
    }


    public function hapus($id){
        $del = $this->mahasiswa_model->delete($id);
        if($del){
            redirect('administrator/mahasiswa');
        }
        else{
            echo "Data salah dihapus";
        }
    }
}
