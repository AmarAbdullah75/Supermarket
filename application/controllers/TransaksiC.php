<?php 
defined("BASEPATH") OR exit("No direct script access allowed");

class TransaksiC extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('TransaksiM');
        $this->load->model('PembeliM');
        $this->load->model('KasirM');
        $this->load->model('ProdukM');
        $this->load->library('session');
    }
    public function index() {
        if($this->session->userdata("1lY5m")===true){
            $data['tblPembelian'] = $this->TransaksiM->get_all();
            $data['produkNama'] = $this->ProdukM->get_nama();
            $data['pembeliNama'] = $this->PembeliM->get_nama();
            // $data['kasirNama'] = $this->KasirM->get_nama();
            foreach ($data["tblPembelian"] as $item) {
                $item->namaPembeli = $this->PembeliM->get_nama_by_id($item->id_pembeli);
                $item->namaKasir = $this->KasirM->get_nama_by_id($item->id_kasir);
                $item->namaProduk = $this->ProdukM->get_nama_by_id($item->id_produk);
            }
            $this->session->set_userdata("path","penjualan");
            $this->load->view('TransaksiV', $data);
        }else{
            redirect("login");
        }
    }
    public function store() {
        $hariIni = date("Y-m-d H:i:s");
        $harga = $this->ProdukM->get_harga_by_id($this->ProdukM->get_id_by_nama($this->input->post('id_produk')));
        $data = [
            'tgl_pembelian' => $hariIni,
            'id_pembeli' => $this->PembeliM->get_id_by_nama($this->input->post('id_pembeli')),
            'id_kasir' => $this->session->userdata("31dkHtTY"),
            'id_produk' => $this->ProdukM->get_id_by_nama($this->input->post('id_produk')),
            'jumlah' => $this->input->post('jumlah'),
            'total_harga' => $this->input->post('jumlah') * $harga
        ];
        $this->TransaksiM->insert($data);
        redirect('penjualan');
    }
}
?>