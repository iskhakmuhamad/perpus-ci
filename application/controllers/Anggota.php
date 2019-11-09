<?php
class Anggota extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            $message = '<div style="color:red; text-align: center;font-family: sans-serif,cursive ;"><i><b>Silahkan Login Dahulu</b></i></div>';
            $this->session->set_flashdata('noLogin', $message);
            redirect('login');
        }
        $this->load->model('anggota_model', 'model');
    }
    public function index()
    {
        $data['anggota'] = $this->model->getAll();
        $this->load->view('dashboard/v_anggota',$data);
    }
    public function insert()
    {
        if (isset($_GET['page_insert'])) {
            $this->load->view('dashboard/v_insertAnggota');
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
                redirect('anggota');
            }
        }
    }

    public function editPage()
    {
        $nim = $_GET['nim'];
        $getId = array(
            'nim' => $nim
        );

        $getAnggota['anggota'] = $this->model->getById($getId);
        $this->load->view('dashboard/v_editAnggota', $getAnggota);
    }

    public function editAnggota()
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

    public function search()
    {
        $search = $this->input->get('search');
        $data['anggota'] = $this->model->search($search);
        $this->load->view('dashboard/v_anggota', $data);
    }
}