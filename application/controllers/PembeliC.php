<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PembeliC extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('PembeliM');
        $this->load->library('session');
    }

    public function index() {
        if($this->session->userdata("1lY5m")===true){
            $this->session->set_userdata("path","pembeli");
            $data['tblPembeli'] = $this->PembeliM->get_all();
            $this->load->view('PembeliV', $data);
        }else{
            redirect("login");
        }
    }
    
    public function store() {
        $data = [
            'nama' => $this->input->post('nama'),
            'gender' => $this->input->post('gender'),
            'no_telp' => $this->input->post('no_telp'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir')
        ];
        $this->PembeliM->insert($data);
        redirect('pembeli');
    }
    
    public function update($id) {
        $data = [
            'nama' => $this->input->post('nama'),
            'gender' => $this->input->post('gender'),
            'no_telp' => $this->input->post('no_telp'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir')
        ];
        $this->PembeliM->update($id, $data);
        redirect('pembeli');
    }
    
    public function delete($id) {
        $this->PembeliM->delete($id);
        redirect('pembeli');
    }
}
