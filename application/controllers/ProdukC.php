<?php 
defined("BASEPATH") OR exit('No direct script access allowed');

class ProdukC extends CI_Controller{

    public function index(){
        $this->load->model("ProdukM");
        $data["tblproduk"] = $this->ProdukM->getProduk();
        $this->load->view("ProdukV",$data);
    }
}

?>