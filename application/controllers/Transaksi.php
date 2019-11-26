<?php
    class Transaksi extends CI_Controller
    {
        public function __construct()
        {
            parent:: __construct();
        if (!$this->session->userdata('logged_in')) 
        {
            $message = '<div style="color:red; text-align: center;font-family: sans-serif,cursive ;"><i><b>Silahkan Login Dahulu</b></i></div>';
            $this->session->set_flashdata('failed', $message);
            redirect('login');
        }
            $this->load->model('transaksi_model' , 'model');
            $this->load->model('anggota_model', 'Amodel');
        $this->load->model('buku_model', 'Bmodel');
            
        }

        public function index()
        {
            $data['transaksi'] = $this->model->getAll();
            $this ->load->view('dashboard/v_transaksi', $data);
        }

        public function insert()
        {
            if (isset($_GET['page_insert'])) 
            { 
                $data['anggota'] = $this->Amodel->getAll();
                $data['buku'] = $this->Bmodel->getAll();
                $this->load->view('dashboard/v_insertTransaksi',$data);
            }  
            if (isset($_POST['submit'])) {
                $nama = $this->input->post('nama');
                $judul = $this->input->post('judul');
                $nim = $this->input->post('nim');
                $tgl_pinjam = $this->input->post('tgl_pinjam');
                $tgl_kembali = $this->input->post('tgl_kembali');
                $status = $this->input->post('status');
                $ket = $this->input->post('ket');

                $value = array
                (
                    'judul' => $judul,
                    'nama' => $nama,
                    'nim' => $nim,
                    'tgl_pinjam' => $tgl_pinjam,
                    'tgl_kembali' => $tgl_kembali,
                    'status' => $status,
                    'ket' => $ket
                );

                $insert = $this->model->insertTransaksi($value);

                if($insert)
                {
                    redirect('transaksi');
                }
                else {
                    $this->session->set_flasdata('failed', '<div style="color : red "><i><b>Gagal Tambah Transaksi</b></i> </div>');
                    redirect('transaksi');
                }

            } 
        }

        public function delete()
        {
            $id = $_GET['id'];

            $delete = array(
                'id' => $id
            );

            $deleteTransaksi = $this->model->delete($delete);
            if ($deleteTransaksi) {
                redirect('transaksi');
            }
        }

        public function editPage()
        {
            $id = $_GET['id'];
            $getId = array(
                'id' => $id
            );

            $getTransaksi['transaksi'] = $this->model->getById($getId);
            $this->load->view('dashboard/v_editTransaksi', $getTransaksi);
        }

        public function editTransaksi()
        {
            if (isset($_POST['submit'])) {
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $judul = $this->input->post('judul');
            $nim = $this->input->post('nim');
            $tgl_pinjam = $this->input->post('tgl_pinjam');
            $tgl_kembali = $this->input->post('tgl_kembali');
            $status = $this->input->post('status');
            $ket = $this->input->post('ket');

            $value = array(
                'judul' => $judul,
                'nama' => $nama,
                'nim' => $nim,
                'tgl_pinjam' => $tgl_pinjam,
                'tgl_kembali' => $tgl_kembali,
                'status' => $status,
                'ket' => $ket
            );
            
                $where = array(
                    'id' => $id
                );

                $update = $this->model->update($value, $where);
                if ($update) {
                    redirect('transaksi');
                }
            }
        }
    public function search()
    {
        $search = $this->input->get('search');
        $data['transaksi'] = $this->model->search($search);
        $this->load->view('dashboard/v_transaksi', $data);
    }

    }
?>
