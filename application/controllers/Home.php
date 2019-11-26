<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        if (!$this->session->userdata('logged_in')) {
            $message = '<div style="color:red; text-align: center;font-family: sans-serif,cursive ;"><i><b>Silahkan Login Dahulu</b></i></div>';
            $this->session->set_flashdata('failed', $message);
            redirect('login');
        }
    }
    public function index()
    {
        $this->load->view('dashboard/index');
    }
}
