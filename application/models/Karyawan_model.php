<?php

class Karyawan_model extends CI_Model{
    public function getAllKaryawan(){
        return $this->db->get('karyawan')->result_array();
    }
    
    public function actionTambah($data){
        $this->db->insert('karyawan', $data);
    }

    public function actionEdit($data){
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('karyawan', $data);
    }

    public function getid($id){
        return $this->db->get_where('karyawan', ['id' => $id])->row_array();
    }
}