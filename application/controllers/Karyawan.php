<?php

class Karyawan extends CI_Controller{
    public function __construct()
    {
        parent ::__construct();
        $this->load->helper('url');
        $this->load->model('Karyawan_model');
    }

    public function index(){
        $data['title'] = "Daftar Karyawan";
        $data['karyawan'] = $this->Karyawan_model->getAllKaryawan();
        $this->load->view('karyawan/index', $data);
    }

    public function tambah(){
        $this->load->view('karyawan/tambah');
    }

    public function actionTambah(){
        $data=[

            'id' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'gaji' => $this->input->post('gaji'),
        ];

        $this->Karyawan_model->actionTambah($data);
        redirect('karyawan/index');
    }

    public function edit($id){
        $data['karyawan'] = $this->db->get_where('karyawan', array('id' => $id))->result();
        $this->load->view('karyawan/edit', $data);
    }

    public function actionEdit(){
        $data=[

            'id' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'gaji' => $this->input->post('gaji'),
        ];

        $this->Karyawan_model->actionEdit($data);
        redirect('karyawan/index');
    }

    
    public function actionHapus($id){
        $this->db->delete('karyawan', array('id' => $id));
        redirect('karyawan/index');
    }
}