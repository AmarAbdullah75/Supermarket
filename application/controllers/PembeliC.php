<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PembeliC extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('PembeliM');
    }

    public function index() {
        $data['tblPembeli'] = $this->PembeliM->get_all();
        $this->load->view('PembeliV', $data);
    }

    public function create() {
        $this->load->view('PembeliV_create');
    }

    public function store() {
        $data = [
            'nama' => $this->input->post('nama'),
            'gender' => $this->input->post('gender'),
            'no_telp' => $this->input->post('no_telp'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir')
        ];
        $this->PembeliM->insert($data);
        redirect('PembeliC');
    }

    public function edit($id) {
        $data['pembeli'] = $this->PembeliM->get_by_id($id);
        
    }

    public function update($id) {
        $data = [
            'nama' => $this->input->post('nama'),
            'gender' => $this->input->post('gender'),
            'no_telp' => $this->input->post('no_telp'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir')
        ];
        $this->PembeliM->update($id, $data);
        redirect('PembeliC');
    }

    public function delete($id) {
        $this->PembeliM->delete($id);
        redirect('PembeliC');
    }
}
