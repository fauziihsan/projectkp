<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('dashboard_model', 'dashboard');
    // }

    public function surat_masuk()
    {
        $data['data'] = $this->db->get('surat_masuk')->result_array();

        $this->load->view('templates/header');
        $this->load->view('surat/masuk', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_surat_masuk()
    {

        $this->form_validation->set_rules('nama_surat_masuk', 'Nama Surat', 'required');
        $this->form_validation->set_rules('keterangan_surat_masuk', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('surat/tambah_surat_masuk');
            $this->load->view('templates/footer');
        } else {
            $nama_surat =  $this->input->post("nama_surat_masuk", TRUE);
            $keterangan =  $this->input->post("keterangan_surat_masuk", TRUE);

            echo $nama_surat;

            echo $keterangan;
        }
    }

    public function surat_keluar()
    {
        $data['data'] = $this->db->get('surat_keluar')->result_array();

        $this->load->view('templates/header');
        $this->load->view('surat/keluar', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_surat_keluar()
    {
        echo 'surat keluar';
    }

    public function surat_keterangan()
    {
        $data['data'] = $this->db->get('surat_keluar')->result_array();

        $this->load->view('templates/header');
        $this->load->view('surat/keterangan', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_surat_keterangan()
    {
        echo 'surat keterangan';
    }
}
