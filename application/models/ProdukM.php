<?php 
class ProdukM extends CI_Model {

    public function getProduk() {
        return $this->db->get("tblproduk")->result();
    }
    public function saveProduk($data) {
        return $this->db->insert("tblproduk", $data);
    }
    public function updateProduk($id, $data) {
        $this->db->where("id_produk", $id);
        return $this->db->update("tblproduk", $data);
    }
    public function deleteProduk($id) {
        $this->db->where("id_produk", $id);
        return $this->db->delete("tblproduk");
    }
    public function get_nama_by_id($id){
        $this->db->select("nama_produk");
        $this->db->from("tblProduk");
        $this->db->where("id_produk",$id);
        return $this->db->get()->row()->nama_produk;
    }
    public function get_harga_by_id($id){
        $this->db->select("harga");
        $this->db->from("tblProduk");
        $this->db->where("id_produk",$id);
        return $this->db->get()->row()->harga;
    }
    public function get_id_by_nama($nama){
        $this->db->select("id_produk");
        $this->db->from("tblProduk");
        $this->db->where("nama_produk",$nama);
        return $this->db->get()->row()->id_produk;
    }
    public function get_nama(){
        $this->db->select("nama_produk");
        $this->db->from("tblProduk");
        return $this->db->get()->result();
    }
}
?>
