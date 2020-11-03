<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('dashboard_model', 'dashboard');
    // }

    public function index()
    {

        $judul = [
            'title' => 'Management User',
            'sub_title' => ''
        ];

        $data['data'] = $this->db->get('user')->result_array();
        $this->load->view('templates/header', $judul);
        $this->load->view('user/index', $data);
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
        redirect(base_url('user'));
    }
}
