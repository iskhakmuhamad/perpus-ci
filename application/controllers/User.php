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
            $nim = $this->input->post('nim');
            $nama = $this->input->post('nama');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $jk = $this->input->post('jk');
            $prodi = $this->input->post('prodi');
            $thn_masuk = $this->input->post('thn_masuk');

            $value = array(
                'nim' => $nim,
                'nama' => $nama,
                'tempat_lahir' => $tempat_lahir,
                'tgl_lahir' => $tgl_lahir,
                'jk' => $jk,
                'prodi' => $prodi,
                'thn_masuk' => $thn_masuk
            );

            $insert = $this->model->insertAnggota($value);

            if ($insert) {
                redirect('user');
            }
        }
    }

    public function editPage()
    {
        $nim = $_GET['nim'];
        $getId = array(
            'nim' => $nim
        );

        $getUser['user'] = $this->model->getById($getId);
        $this->load->view('dashboard/v_editUser', $getUser);
    }

    public function editUser()
    {
        if (isset($_POST['submit'])) {
            $id = $this->input->post('id');
            $nim = $this->input->post('nim');
            $nama = $this->input->post('nama');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $jk = $this->input->post('jk');
            $prodi = $this->input->post('prodi');
            $thn_masuk = $this->input->post('thn_masuk');

            $value = array(
                'nim' => $nim,
                'nama' => $nama,
                'tempat_lahir' => $tempat_lahir,
                'tgl_lahir' => $tgl_lahir,
                'jk' => $jk,
                'prodi' => $prodi,
                'thn_masuk' => $thn_masuk
            );

            $where = array(
                'nim' => $id
            );

            $update = $this->model->update($value, $where);
            if ($update) {
                redirect('anggota');
            }
        }
    }

    public function delete()
    {
        $nim = $_GET['nim'];

        $delete = array(
            'nim' => $nim
        );

        $deleteAnggota = $this->model->delete($delete);
        if ($deleteAnggota) {
            redirect('anggota');
        }
    }
}
