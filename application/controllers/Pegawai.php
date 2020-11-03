<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{



    public function index()
    {

        $judul = [
            'title' => 'Management Pegawai',
            'sub_title' => ''
        ];

        $data['data'] = $this->db->get('pegawai')->result_array();
        $this->load->view('templates/header', $judul);
        $this->load->view('pegawai/index', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->db->where(['id_user' => $id]);
        $this->db->delete('user');
        $this->session->set_flashdata('success', 'Berhasil Dihapus!');
        redirect(base_url('user'));
    }

    public function tambah()
    {
        $this->session->set_flashdata('success', 'User Berhasil Ditambah!');
        redirect(base_url('pegawai'));
    }
}
