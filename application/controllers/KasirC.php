<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KasirC extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('KasirM');
        $this->load->library('session');
    }

    // Menampilkan semua data kasir
    public function index() {
        if($this->session->userdata("1lY5m")===true){
            $this->session->set_userdata("path","kasir");
            $data['kasir'] = $this->KasirM->get_all_kasir(); // Mengambil semua data kasir
            $this->load->view('KasirV', $data); // Menampilkan view
        }else{
            redirect("login");
        }
    }
    
    // Menyimpan kasir baru
    public function store() {
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp'),
            'gender' => $this->input->post('gender'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        ];
        $this->KasirM->add_kasir($data); // Menambahkan kasir
        redirect('kasir'); // Menampilkan view
    }
    // Memperbarui data kasir
    public function update($id_kasir) {
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp'),
            'gender' => $this->input->post('gender'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
        ];
        $this->KasirM->update_kasir($id_kasir, $data); // Mengupdate kasir
        redirect('kasir'); // Menampilkan view
    }
    
    // Menghapus kasir berdasarkan ID
    public function delete($id_kasir) {
        $this->KasirM->delete_kasir($id_kasir); // Menghapus kasir
        redirect('kasir'); // Menampilkan view
    }
}
