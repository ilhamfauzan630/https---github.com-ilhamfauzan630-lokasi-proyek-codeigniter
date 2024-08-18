<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek_model extends CI_Model {

    public function insert($data) {
        $this->db->insert('proyek', $data);
    }

    public function get_all() {
        $this->db->select('*');
        $this->db->from('proyek');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function delete_proyek($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('proyek');
        return $this->db->affected_rows();
    }
}