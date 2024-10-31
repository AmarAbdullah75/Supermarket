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
}
