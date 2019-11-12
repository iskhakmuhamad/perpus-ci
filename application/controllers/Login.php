<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct(){
        parent:: __construct();
        $this->load->model('user_model','model');
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
            $user = $this->model->cek_login($where);
            if ($user) {
                $sessionData = array
                (
                    'username' => $user->username,
                    'nama' =>$user->nama,
                    'level'  => $user->level,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($sessionData);
                redirect('home');
            }
        }
        $this->load->view('login/v_login');
    }
    public function logout(){
        $sessionData = array(
            'username',
            'level',
            'logged_in'
        );
        $this->session->unset_userdata($sessionData);
            $message = '<div style="color: green; text-align: center;font-family: sans-serif,cursive ;"><i><b>Logout Berhasil</b></i></div>';
            $this->session->set_flashdata('log_out', $message);
            redirect('login');
    }
}

?>