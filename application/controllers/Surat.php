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
        $judul = [
            'title' => 'Management Surat',
            'sub_title' => 'Surat Masuk'
        ];

        $data['data'] = $this->db->get('surat_masuk')->result_array();

        $this->load->view('templates/header', $judul);
        $this->load->view('surat/masuk', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_surat_masuk()
    {

        $this->form_validation->set_rules('nama_surat', 'Nama Surat', 'required');
        $this->form_validation->set_rules('tanggal_surat', 'Keterangan', 'required');
        $this->form_validation->set_rules('keterangan_surat', 'Keterangan', 'required');
        // $this->form_validation->set_rules('file_surat', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management Surat',
                'sub_title' => 'Surat Masuk'
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('surat/tambah_surat_masuk');
            $this->load->view('templates/footer');
        } else {
            $nama_surat =  $this->input->post("nama_surat", TRUE);
            $tanggal_surat =  $this->input->post("tanggal_surat", TRUE);
            $keterangan_surat =  $this->input->post("keterangan_surat", TRUE);
            // $file_surat =  $this->input->post("file_surat", TRUE);

            $config['upload_path']          = './uploads/surat_masuk';
            $config['allowed_types']        = 'pdf|doc|docx';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_surat')) {

                $data = array('upload_data' => $this->upload->data());
                $file_surat = $data['upload_data']['file_name'];

                $save = [
                    'nama_surat_masuk' => $nama_surat,
                    'tanggal_surat_masuk' => date('Y-m-d', strtotime($tanggal_surat)),
                    'keterangan_surat_masuk' => $keterangan_surat,
                    'file_surat_masuk' => $file_surat
                ];

                $this->db->insert('surat_masuk', $save);
                $this->session->set_flashdata('success', 'Berhasil Ditambahkan!');
                redirect(base_url("surat/surat_masuk"));
            }
        }
    }

    public function hapusSuratMasuk($id)
    {

        $data = $this->db->get_where('surat_masuk', ['id_surat_masuk' => $id])->row_array();

        unlink("./uploads/surat_masuk/" . $data['file_surat_masuk']);

        $this->db->where(['id_surat_masuk' => $id]);

        $this->db->delete('surat_masuk');

        $this->session->set_flashdata('success', 'Berhasil Dihapus!');

        redirect(base_url('surat/surat_masuk'));
    }

    public function editSuratMasuk($id)
    {

        $this->form_validation->set_rules('nama_surat', 'Nama Surat', 'required');
        $this->form_validation->set_rules('tanggal_surat', 'Keterangan', 'required');
        $this->form_validation->set_rules('keterangan_surat', 'Keterangan', 'required');
        // $this->form_validation->set_rules('file_surat', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management Surat',
                'sub_title' => 'Surat Masuk'
            ];
            $data['surat_masuk'] = $this->db->get_where('surat_masuk', ['id_surat_masuk' => $id])->row_array();

            $this->load->view('templates/header', $judul);
            $this->load->view('surat/edit_surat_masuk', $data);
            $this->load->view('templates/footer');
        } else {
            $nama_surat =  $this->input->post("nama_surat", TRUE);
            $tanggal_surat =  $this->input->post("tanggal_surat", TRUE);
            $keterangan_surat =  $this->input->post("keterangan_surat", TRUE);
            // $file_surat =  $this->input->post("file_surat", TRUE);

            $config['upload_path']          = './uploads/surat_masuk';
            $config['allowed_types']        = 'pdf|doc|docx';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_surat')) {
                $data = $this->db->get_where('surat_masuk', ['id_surat_masuk' => $id])->row_array();
                unlink("./uploads/surat_masuk/" . $data['file_surat_masuk']);

                $data = array('upload_data' => $this->upload->data());
                $file_surat = $data['upload_data']['file_name'];

                $update = [
                    'nama_surat_masuk' => $nama_surat,
                    'tanggal_surat_masuk' => date('Y-m-d', strtotime($tanggal_surat)),
                    'keterangan_surat_masuk' => $keterangan_surat,
                    'file_surat_masuk' => $file_surat
                ];

                $this->db->where('id_surat_masuk', $id);
                $this->db->update('surat_masuk', $update);
                $this->session->set_flashdata('success', 'Berhasil Diedit!');
                redirect(base_url("surat/surat_masuk"));
            } else {

                $update = [
                    'nama_surat_masuk' => $nama_surat,
                    'tanggal_surat_masuk' => date('Y-m-d', strtotime($tanggal_surat)),
                    'keterangan_surat_masuk' => $keterangan_surat,
                ];

                $this->db->where('id_surat_masuk', $id);
                $this->db->update('surat_masuk', $update);
                $this->session->set_flashdata('success', 'Berhasil Diedit!');
                redirect(base_url("surat/surat_masuk"));
            }
        }
    }

    public function surat_keluar()
    {
        $judul = [
            'title' => 'Management Surat',
            'sub_title' => 'Surat Keluar'
        ];
        $data['data'] = $this->db->get('surat_keluar')->result_array();

        $this->load->view('templates/header', $judul);
        $this->load->view('surat/keluar', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_surat_keluar()
    {

        $this->form_validation->set_rules('nama_surat', 'Nama Surat', 'required');
        $this->form_validation->set_rules('tanggal_surat', 'Keterangan', 'required');
        $this->form_validation->set_rules('keterangan_surat', 'Keterangan', 'required');
        // $this->form_validation->set_rules('file_surat', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management Surat',
                'sub_title' => 'Surat Keluar'
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('surat/tambah_surat_keluar');
            $this->load->view('templates/footer');
        } else {
            $nama_surat =  $this->input->post("nama_surat", TRUE);
            $tanggal_surat =  $this->input->post("tanggal_surat", TRUE);
            $keterangan_surat =  $this->input->post("keterangan_surat", TRUE);
            // $file_surat =  $this->input->post("file_surat", TRUE);

            $config['upload_path']          = './uploads/surat_keluar';
            $config['allowed_types']        = 'pdf|doc|docx';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_surat')) {

                $data = array('upload_data' => $this->upload->data());
                $file_surat = $data['upload_data']['file_name'];

                $save = [
                    'nama_surat_keluar' => $nama_surat,
                    'tanggal_surat_keluar' => date('Y-m-d', strtotime($tanggal_surat)),
                    'keterangan_surat_keluar' => $keterangan_surat,
                    'file_surat_keluar' => $file_surat
                ];

                $this->db->insert('surat_keluar', $save);
                $this->session->set_flashdata('success', 'Berhasil Ditambahkan!');
                redirect(base_url("surat/surat_keluar"));
            }
        }
    }

    public function hapusSuratKeluar($id)
    {

        $data = $this->db->get_where('surat_keluar', ['id_surat_keluar' => $id])->row_array();

        unlink("./uploads/surat_keluar/" . $data['file_surat_keluar']);

        $this->db->where(['id_surat_keluar' => $id]);

        $this->db->delete('surat_keluar');

        $this->session->set_flashdata('success', 'Berhasil Dihapus!');

        redirect(base_url('surat/surat_keluar'));
    }

    public function editSuratKeluar($id)
    {

        $this->form_validation->set_rules('nama_surat', 'Nama Surat', 'required');
        $this->form_validation->set_rules('tanggal_surat', 'Keterangan', 'required');
        $this->form_validation->set_rules('keterangan_surat', 'Keterangan', 'required');
        // $this->form_validation->set_rules('file_surat', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management Surat',
                'sub_title' => 'Surat Keluar'
            ];
            $data['surat_keluar'] = $this->db->get_where('surat_keluar', ['id_surat_keluar' => $id])->row_array();

            $this->load->view('templates/header', $judul);
            $this->load->view('surat/edit_surat_keluar', $data);
            $this->load->view('templates/footer');
        } else {
            $nama_surat =  $this->input->post("nama_surat", TRUE);
            $tanggal_surat =  $this->input->post("tanggal_surat", TRUE);
            $keterangan_surat =  $this->input->post("keterangan_surat", TRUE);
            // $file_surat =  $this->input->post("file_surat", TRUE);

            $config['upload_path']          = './uploads/surat_keluar';
            $config['allowed_types']        = 'pdf|doc|docx';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_surat')) {
                $data = $this->db->get_where('surat_keluar', ['id_surat_keluar' => $id])->row_array();
                unlink("./uploads/surat_keluar/" . $data['file_surat_keluar']);

                $data = array('upload_data' => $this->upload->data());
                $file_surat = $data['upload_data']['file_name'];

                $update = [
                    'nama_surat_keluar' => $nama_surat,
                    'tanggal_surat_keluar' => date('Y-m-d', strtotime($tanggal_surat)),
                    'keterangan_surat_keluar' => $keterangan_surat,
                    'file_surat_keluar' => $file_surat
                ];

                $this->db->where('id_surat_keluar', $id);
                $this->db->update('surat_keluar', $update);
                $this->session->set_flashdata('success', 'Berhasil Diedit!');
                redirect(base_url("surat/surat_keluar"));
            } else {

                $update = [
                    'nama_surat_keluar' => $nama_surat,
                    'tanggal_surat_keluar' => date('Y-m-d', strtotime($tanggal_surat)),
                    'keterangan_surat_keluar' => $keterangan_surat
                ];

                $this->db->where('id_surat_keluar', $id);
                $this->db->update('surat_keluar', $update);
                $this->session->set_flashdata('success', 'Berhasil Diedit!');
                redirect(base_url("surat/surat_keluar"));
            }
        }
    }

    public function surat_keterangan()
    {
        $judul = [
            'title' => 'Management Surat',
            'sub_title' => 'Surat Keterangan'
        ];

        $data['data'] = $this->db->get('surat_keterangan')->result_array();

        $this->load->view('templates/header', $judul);
        $this->load->view('surat/keterangan', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_surat_keterangan()
    {

        $this->form_validation->set_rules('nama_surat', 'Nama Surat', 'required');
        $this->form_validation->set_rules('tanggal_surat', 'Keterangan', 'required');
        $this->form_validation->set_rules('keterangan_surat', 'Keterangan', 'required');
        // $this->form_validation->set_rules('file_surat', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management Surat',
                'sub_title' => 'Surat Keterangan'
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('surat/tambah_surat_keterangan');
            $this->load->view('templates/footer');
        } else {
            $nama_surat =  $this->input->post("nama_surat", TRUE);
            $tanggal_surat =  $this->input->post("tanggal_surat", TRUE);
            $keterangan_surat =  $this->input->post("keterangan_surat", TRUE);
            // $file_surat =  $this->input->post("file_surat", TRUE);

            $config['upload_path']          = './uploads/surat_keterangan';
            $config['allowed_types']        = 'pdf|doc|docx';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_surat')) {

                $data = array('upload_data' => $this->upload->data());
                $file_surat = $data['upload_data']['file_name'];

                $save = [
                    'nama_surat_keterangan' => $nama_surat,
                    'tanggal_surat_keterangan' => date('Y-m-d', strtotime($tanggal_surat)),
                    'keterangan_surat_keterangan' => $keterangan_surat,
                    'file_surat_keterangan' => $file_surat
                ];

                $this->db->insert('surat_keterangan', $save);
                $this->session->set_flashdata('success', 'Berhasil Ditambahkan!');
                redirect(base_url("surat/surat_keterangan"));
            }
        }
    }

    public function hapusSuratKeterangan($id)
    {

        $data = $this->db->get_where('surat_keterangan', ['id_surat_keterangan' => $id])->row_array();

        unlink("./uploads/surat_keterangan/" . $data['file_surat_keterangan']);

        $this->db->where(['id_surat_keterangan' => $id]);

        $this->db->delete('surat_keterangan');

        $this->session->set_flashdata('success', 'Berhasil Dihapus!');

        redirect(base_url('surat/surat_keterangan'));
    }

    public function editSuratKeterangan($id)
    {

        $this->form_validation->set_rules('nama_surat', 'Nama Surat', 'required');
        $this->form_validation->set_rules('tanggal_surat', 'Keterangan', 'required');
        $this->form_validation->set_rules('keterangan_surat', 'Keterangan', 'required');
        // $this->form_validation->set_rules('file_surat', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management Surat',
                'sub_title' => 'Surat Keterangan'
            ];
            $data['surat_keterangan'] = $this->db->get_where('surat_keterangan', ['id_surat_keterangan' => $id])->row_array();

            $this->load->view('templates/header', $judul);
            $this->load->view('surat/edit_surat_keterangan', $data);
            $this->load->view('templates/footer');
        } else {
            $nama_surat =  $this->input->post("nama_surat", TRUE);
            $tanggal_surat =  $this->input->post("tanggal_surat", TRUE);
            $keterangan_surat =  $this->input->post("keterangan_surat", TRUE);
            // $file_surat =  $this->input->post("file_surat", TRUE);

            $config['upload_path']          = './uploads/surat_keterangan';
            $config['allowed_types']        = 'pdf|doc|docx';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_surat')) {
                $data = $this->db->get_where('surat_keterangan', ['id_surat_keterangan' => $id])->row_array();
                unlink("./uploads/surat_keterangan/" . $data['file_surat_keterangan']);

                $data = array('upload_data' => $this->upload->data());
                $file_surat = $data['upload_data']['file_name'];

                $update = [
                    'nama_surat_keterangan' => $nama_surat,
                    'tanggal_surat_keterangan' => date('Y-m-d', strtotime($tanggal_surat)),
                    'keterangan_surat_keterangan' => $keterangan_surat,
                    'file_surat_keterangan' => $file_surat
                ];

                $this->db->where('id_surat_keterangan', $id);
                $this->db->update('surat_keterangan', $update);
                $this->session->set_flashdata('success', 'Berhasil Diedit!');
                redirect(base_url("surat/surat_keterangan"));
            } else {

                $update = [
                    'nama_surat_keterangan' => $nama_surat,
                    'tanggal_surat_keterangan' => date('Y-m-d', strtotime($tanggal_surat)),
                    'keterangan_surat_keterangan' => $keterangan_surat,
                ];

                $this->db->where('id_surat_keterangan', $id);
                $this->db->update('surat_keterangan', $update);
                $this->session->set_flashdata('success', 'Berhasil Diedit!');
                redirect(base_url("surat/surat_keterangan"));
            }
        }
    }
}
