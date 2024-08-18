<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi_model extends CI_Model
{

    public function insert($data)
    {
        $this->db->insert('lokasi', $data);
    }

    public function get_all()
    {
        $this->db->select('*');
        $this->db->from('lokasi');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('lokasi', ['id' => $id])->row();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('lokasi', $data);
    }

    public function delete_lokasi($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('lokasi');
        return $this->db->affected_rows();
    }
}
