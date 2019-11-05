<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct(){
        parent:: __construct();
        $this->load->model('login_model');
    }
    public function index()
    {
        if(isset($_POST['login'])){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $where = array
            (
                'username' => $username,
                'password' => $password

            );
            $cek = $this->login_model->cek_login($where)->num_rows();
            if ($cek>0) {
                redirect('home');
            }
        }
        $this->load->view('v_login');
    }
}

?>