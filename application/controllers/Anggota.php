<?php
class Anggota extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('anggota_model', 'model');
    }
    public function index()
    {
        $data['anggota'] = $this->model->getAll();
        $this->load->view('anggota/v_anggota',$data);
    }
}