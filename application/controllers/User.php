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

        $data['data'] = $this->db->get('user')->result_array();
        $this->load->view('templates/header');
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }
}
