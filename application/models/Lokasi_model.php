<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi_model extends CI_Model {

    public function insert($data) {
        $this->db->insert('lokasi', $data);
    }

    public function get_all() {
        $this->db->select('*');
        $this->db->from('lokasi');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function delete_lokasi($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('lokasi');
        return $this->db->affected_rows();
    }
}