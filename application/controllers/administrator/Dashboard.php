<?php
defined('BASEPATH') or exit('Not Allowed Direct Access');

class Dashboard extends CI_Controller{
    public function index(){

        // $this->load->view('_partial/layout');
        $this->data['title'] = 'Home';
        $this->template->load('dashboard',$this->data);
        

    }

    public function profil(){
        $this->data['title'] = 'Profil';
        $this->template->load('profil',$this->data);
    }
}


?>