<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        // $data = $this->db->get('user')->result_array();
        // var_dump($data);

        $this->load->view('templates/header');
        $this->load->view('templates/index');
        $this->load->view('templates/footer');
    }
}
