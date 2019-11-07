<?php
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'model');
    }
    public function index()
    {
        $data['user'] = $this->model->getAll();
        $this->load->view('dashboard/v_user', $data);
    }
    
    public function insert()
    {
        if (isset($_GET['page_insert'])) {
            $this->load->view('dashboard/v_insertUser');
        }
        if (isset($_POST['submit'])) {
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            $level = $this->input->post('level');

            $value = array(
                'nama' => $nama,
                'username' => $username,
                'password' => $password,
                'email' => $email,
                'level' => $level
            );

            $insert = $this->model->insertUser($value);

            if ($insert) {
                redirect('user');
            }
        }
    }

    public function editPage()
    {
        $id = $_GET['id'];
        $getId = array(
            'id' => $id
        );

        $getUser['user'] = $this->model->getById($getId);
        $this->load->view('dashboard/v_editUser', $getUser);
    }

    public function editUser()
    {
        if (isset($_POST['submit'])) {
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            $level = $this->input->post('level');

            $value = array(
                'nama' => $nama,
                'username' => $username,
                'password' => $password,
                'email' => $email,
                'level' => $level
            );

            $where = array(
                'id' => $id
            );

            $update = $this->model->update($value, $where);
            if ($update) {
                redirect('user');
            }
        }
    }

    public function delete()
    {
        $id = $_GET['id'];

        $delete = array(
            'id' => $id
        );

        $deleteUser = $this->model->delete($delete);
        if ($deleteUser) {
            redirect('user');
        }
    }

    public function search()
    {
        $search = $this->input->get('search');
        $data['user'] = $this->model->search($search);
        $this->load->view('dashboard/v_user', $data);
    }
}
