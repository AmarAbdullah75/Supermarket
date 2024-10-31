<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KasirM extends CI_Model {

    // Mendapatkan semua data kasir
    public function get_all_kasir() {
        return $this->db->get('tblKasir')->result();
    }

    // Mendapatkan kasir berdasarkan ID
    public function get_kasir_by_id($id_kasir) {
        return $this->db->get_where('tblKasir', ['id_kasir' => $id_kasir])->row();
    }

    // Menambahkan kasir baru
    public function add_kasir($data) {
        return $this->db->insert('tblKasir', $data);
    }

    // Mengupdate data kasir
    public function update_kasir($id_kasir, $data) {
        return $this->db->update('tblKasir', $data, ['id_kasir' => $id_kasir]);
    }

    // Menghapus kasir berdasarkan ID
    public function delete_kasir($id_kasir) {
        return $this->db->delete('tblKasir', ['id_kasir' => $id_kasir]);
    }
}
