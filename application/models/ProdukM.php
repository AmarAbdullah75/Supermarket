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
}
?>
