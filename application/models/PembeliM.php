<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PembeliM extends CI_Model {

    public function get_all() {
        return $this->db->get('tblPembeli')->result();
    }

    public function insert($data) {
        return $this->db->insert('tblPembeli', $data);
    }

    public function get_by_id($id) {
        return $this->db->get_where('tblPembeli', ['id_pembeli' => $id])->row();
    }

    public function update($id, $data) {
        $this->db->where('id_pembeli', $id);
        return $this->db->update('tblPembeli', $data);
    }

    public function delete($id) {
        $this->db->where('id_pembeli', $id);
        return $this->db->delete('tblPembeli');
    }

    public function get_nama_by_id($id) {
        $this->db->select('nama'); // Memilih kolom 'nama' saja
        $this->db->from('tblPembeli');
        $this->db->where('id_pembeli', $id);
        return $this->db->get()->row()->nama;
    }
    public function get_id_by_nama($nama) {
        $this->db->select('id_pembeli'); // Memilih kolom 'nama' saja
        $this->db->from('tblPembeli');
        $this->db->where('nama', $nama);
        return $this->db->get()->row()->id_pembeli;
    }
    public function get_nama(){
        $this->db->select("nama");
        $this->db->from("tblPembeli");
        return $this->db->get()->result();
    }
    
}
