<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('dashboard_model', 'dashboard');
    }

    public function index()
    {
        // $data = $this->dashboard->user();

        $this->load->view('templates/header');
        $this->load->view('templates/index');
        $this->load->view('templates/footer');
    }
}
