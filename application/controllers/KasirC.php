<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KasirC extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('KasirM'); // Memuat model KasirM
    }

    // Menampilkan semua data kasir
    public function index() {
        $data['kasir'] = $this->KasirM->get_all_kasir(); // Mengambil semua data kasir
        $this->load->view('KasirV', $data); // Menampilkan view
    }

    // Menampilkan form untuk menambahkan kasir
    public function create() {
        $this->load->view('KasirV_create'); // Form untuk menambah kasir
    }

    // Menyimpan kasir baru
    public function store() {
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp'),
            'gender' => $this->input->post('gender'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
        ];
        $this->KasirM->add_kasir($data); // Menambahkan kasir
        redirect('KasirC'); // Redirect ke halaman index
    }

    // Menampilkan form untuk mengedit kasir
    public function edit($id_kasir) {
        $data['kasir'] = $this->KasirM->get_kasir_by_id($id_kasir); // Mengambil data kasir
        $this->load->view('KasirV_edit', $data); // Menampilkan view edit
    }

    // Memperbarui data kasir
    public function update($id_kasir) {
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp'),
            'gender' => $this->input->post('gender'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
        ];
        $this->KasirM->update_kasir($id_kasir, $data); // Mengupdate kasir
        redirect('KasirC'); // Redirect ke halaman index
    }

    // Menghapus kasir berdasarkan ID
    public function delete($id_kasir) {
        $this->KasirM->delete_kasir($id_kasir); // Menghapus kasir
        redirect('KasirC'); // Redirect ke halaman index
    }
}
