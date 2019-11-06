<?php
class Coba extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('buku_model','model');
    }
    public function index()
    {
        $data['buku'] = $this->model->getAll();
        $this->load->view('dashboard/v_buku',$data);
    }
}
