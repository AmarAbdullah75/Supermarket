<?php 
defined("BASEPATH") OR exit('No direct script access allowed');

class ProdukC extends CI_Controller {

    public function index() {
        $this->load->model("ProdukM");
        $data["tblproduk"] = $this->ProdukM->getProduk();
        $this->load->view("ProdukV", $data);
    }

    public function create() {
        $this->load->view("ProdukV_create");
    }

    public function store() {
        $this->load->model("ProdukM");
        $data = [
            "nama_produk" => $this->input->post("nama_produk"),
            "jenis" => $this->input->post("jenis"),
            "kadaluarsa" => $this->input->post("kadaluarsa"),
            "harga" => $this->input->post("harga"),
            "berat" => $this->input->post("berat"),
            "stok" => $this->input->post("stok")
        ];
        $this->ProdukM->saveProduk($data);
        redirect("ProdukC");
    }

    public function edit($id) {
        $this->load->model("ProdukM");
        $data["produk"] = $this->ProdukM->getProdukById($id);
        $this->load->view("EditProdukV", $data);
    }

    public function update($id) {
        $this->load->model("ProdukM");
        $data = [
            "nama_produk" => $this->input->post("nama_produk"),
            "jenis" => $this->input->post("jenis"),
            "kadaluarsa" => $this->input->post("kadaluarsa"),
            "harga" => $this->input->post("harga"),
            "berat" => $this->input->post("berat"),
            "stok" => $this->input->post("stok")
        ];
        $this->ProdukM->updateProduk($id, $data);
        redirect("ProdukC");
    }

    public function delete($id) {
        $this->load->model("ProdukM");
        $this->ProdukM->deleteProduk($id);
        redirect("ProdukC");
    }
}
?>
