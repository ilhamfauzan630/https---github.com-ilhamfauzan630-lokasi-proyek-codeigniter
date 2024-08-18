<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proyeklokasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('Proyeklokasi_model');
        $data['proyeklokasi'] = $this->Proyeklokasi_model->get_all();
        $this->load->view('proyeklokasi/index', $data);
    }

    public function edit($id)
    {
        // Logika untuk mengedit data proyek lokasi
    }

    public function delete($id)
    {
        $this->load->model('Proyeklokasi_model');
        if ($this->Proyeklokasi_model->delete_proyeklokasi((int)$id)) {
            redirect('proyeklokasi');
        } else {
            // Handle error, maybe show an error message
            echo "Gagal menghapus data.";
        }
    }
}
