<?php
defined('BASEPATH') or exit('Not Allowed Direct Access');
class Mahasiswa_model extends CI_Model{
    public function getdata(){
        $this->db->order_by('id','DESC');
        $data = $this->db->get('mahasiswa')->result();
        // select * from mahasiswa
        return $data;
    }

    public function edit($id){
        $this->db->where('id',$id);
        $data = $this->db->get('mahasiswa')->row();
        return $data;
    }

    public function edit_save($data,$id){
       
        $this->db->where('id',$id);
        $update =$this->db->update('mahasiswa',$data);
        return $update;
    }

    public function delete($id){
        $this->db->where('id',$id);
        $delete = $this->db->delete('mahasiswa');
        // delete from mahasiswa where id = '$id'
        return $delete;
    }
}

?>