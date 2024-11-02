<?php 
defined("BASEPATH") OR exit('No direct script access allowed');

class ProdukC extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("ProdukM");
        $this->load->library('session');
    }

    public function index() {
        if($this->session->userdata("1lY5m")===true){
            $this->session->set_userdata("path","produk");
            $data["tblproduk"] = $this->ProdukM->getProduk();
            $this->load->view("ProdukV", $data);
        }else{
            redirect("login");
        }
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
        redirect("produk");
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
        redirect("produk");
    }
    
    public function delete($id) {
        $this->load->model("ProdukM");
        $this->ProdukM->deleteProduk($id);
        // $this->load->view("produk");
        redirect("produk");
    }
}
?>
