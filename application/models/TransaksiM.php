<?php 
defined("BASEPATH") OR exit("No direct script access allowed");

class TransaksiM extends CI_Model{
    public function get_all() {
        return $this->db->get('tblpembelian')->result();
    }
    public function insert($data) {
        return $this->db->insert('tblPembelian', $data);
    }
}
?>