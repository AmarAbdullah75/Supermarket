<?php 
class ProdukM extends CI_Model{
    public  function getProduk(){
        return $this->db->get("tblproduk")->result();
    }
}
?>