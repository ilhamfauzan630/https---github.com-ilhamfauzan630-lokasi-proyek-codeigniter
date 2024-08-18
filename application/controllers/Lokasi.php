<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('Lokasi_model');
        $data['lokasi'] = $this->Lokasi_model->get_all();
        $this->load->view('lokasi/index', $data);
    }

    public function tambah()
    {
        $this->load->model('Lokasi_model');
        $this->load->view('lokasi/tambah');
    }

    public function kirim() {
        $this->load->model('Lokasi_model');
        
        // Validasi data input
        $this->form_validation->set_rules('nama_lokasi', 'Nama Lokasi', 'required');
        $this->form_validation->set_rules('negara', 'Negara', 'required');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan kembali form dengan pesan error
            $this->load->view('lokasi/tambah');
        } else {
            // Ambil data dari form
            $data = [
                'nama_lokasi' => $this->input->post('nama_lokasi'),
                'negara' => $this->input->post('negara'),
                'provinsi' => $this->input->post('provinsi'),
                'kota' => $this->input->post('kota'),
                'created_at' => date('Y-m-d H:i:s'),
            ];

            // Simpan data ke database
            $this->Lokasi_model->insert($data);

            redirect('lokasi');
        }
    }

    public function edit($id)
    {
        $this->load->model('Lokasi_model');
        $data['lokasi'] = $this->Lokasi_model->get_by_id($id);

        if (!$data['lokasi']) {
            show_404();
        }

        $this->load->view('lokasi/edit', $data);
    }

    public function update($id)
    {
        $this->load->model('Lokasi_model');
        $data = [
            'nama_lokasi' => $this->input->post('nama_lokasi'),
            'negara' => $this->input->post('negara'),
            'provinsi' => $this->input->post('provinsi'),
            'kota' => $this->input->post('kota'),
        ];

        $this->Lokasi_model->update($id, $data);
        redirect('lokasi');
    }

    public function delete($id)
    {
        $this->load->model('Lokasi_model');
        if ($this->Lokasi_model->delete_lokasi((int)$id)) {
            redirect('lokasi');
        } else {
            // Handle error, maybe show an error message
            echo "Failed to delete.";
        }
    }
}
