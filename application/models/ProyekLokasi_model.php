<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProyekLokasi_model extends CI_Model
{

    public function insert($data)
    {
        $this->db->insert('proyek_lokasi', $data);
        return $this->db->insert_id();
    }

    public function get_all()
    {
        $this->db->select('proyek_lokasi.id, proyek.nama_proyek, proyek.client, lokasi.nama_lokasi, proyek.pimpinan_proyek, proyek.tgl_mulai, proyek.tgl_selesai, proyek.keterangan');
        $this->db->from('proyek_lokasi');
        $this->db->join('proyek', 'proyek.id = proyek_lokasi.proyek_id');
        $this->db->join('lokasi', 'lokasi.id = proyek_lokasi.lokasi_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function delete_proyeklokasi($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('proyek_lokasi');
        echo 'Query Terakhir: ' . $this->db->last_query();
        return $this->db->affected_rows();
    }
}
