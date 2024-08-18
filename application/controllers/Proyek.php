<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proyek extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('Proyek_model');
        $data['proyek'] = $this->Proyek_model->get_all();
        $this->load->view('proyek/index', $data);
    }

    public function tambah()
    {
        $this->load->model('Proyek_model');
        $this->load->view('proyek/tambah');
    }

    public function kirim()
    {
        $this->load->model('Proyek_model');

        // Validasi data input
        $this->form_validation->set_rules('nama_proyek', 'Nama Proyek', 'required');
        $this->form_validation->set_rules('client', 'Client', 'required');
        $this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'required');
        $this->form_validation->set_rules('tgl_selesai', 'Tanggal Selesai', 'required');
        $this->form_validation->set_rules('pimpinan_proyek', 'Pimpinan Proyek', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan kembali form dengan pesan error
            $this->load->view('proyek/tambah');
        } else {
            // Ambil data dari form
            $data = [
                'nama_proyek' => $this->input->post('nama_proyek'),
                'client' => $this->input->post('client'),
                'tgl_mulai' => $this->input->post('tgl_mulai'),
                'tgl_selesai' => $this->input->post('tgl_selesai'),
                'pimpinan_proyek' => $this->input->post('pimpinan_proyek'),
                'keterangan' => $this->input->post('keterangan'),
                'created_at' => date('Y-m-d H:i:s'),
            ];

            // Simpan data ke database
            $this->Proyek_model->insert($data);

            redirect('proyek');
        }
    }

    public function edit($id)
    {
        $this->load->model('Proyek_model');
        $data['proyek'] = $this->Proyek_model->get_by_id($id);

        if (!$data['proyek']) {
            show_404();
        }

        $this->load->view('proyek/edit', $data);
    }

    public function update($id)
    {
        $this->load->model('Proyek_model');
        $data = [
            'nama_proyek' => $this->input->post('nama_proyek'),
            'client' => $this->input->post('client'),
            'tgl_mulai' => $this->input->post('tgl_mulai'),
            'tgl_selesai' => $this->input->post('tgl_selesai'),
            'pimpinan_proyek' => $this->input->post('pimpinan_proyek'),
            'keterangan' => $this->input->post('keterangan'),
        ];

        $this->Proyek_model->update($id, $data);
        redirect('proyek');
    }

    public function delete($id)
    {
        $this->load->model('Proyek_model');
        if ($this->Proyek_model->delete_proyek((int)$id)) {
            redirect('proyek');
        } else {
            echo "Failed to delete.";
        }
    }
}
