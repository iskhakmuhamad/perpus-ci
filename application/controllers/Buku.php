<?php
    class Buku extends CI_Controller
    {
        public function __construct()
        {
            parent:: __construct();
            $this->load->model('buku_model' , 'model');
            
        }

        public function index()
        {
            $data['buku'] = $this->model->getAll();
            $this ->load->view('buku/v_buku', $data);
        }

        public function insert()
        {
            if (isset($_GET['page_insert'])) 
            { 
                $this->load->view('buku/v_insertBuku');
            }  
            if (isset($_POST['submit'])) {
                $judul = $this->input->post('judul');
                $pengarang = $this->input->post('pengarang');
                $penerbit = $this->input->post('penerbit');
                $thn_terbit = $this->input->post('thn_terbit');
                $isbn = $this->input->post('isbn');
                $jumlah_buku = $this->input->post('jumlah_buku');
                $lokasi = $this->input->post('lokasi');
                $tgl_input = $this->input->post('tgl_input');

                $value = array
                (
                    'judul' => $judul,
                    'pengarang' => $pengarang,
                    'penerbit' => $penerbit,
                    'thn_terbit' => $thn_terbit,
                    'isbn' => $isbn,
                    'jumlah_buku' => $jumlah_buku,
                    'lokasi' => $lokasi,
                    'tgl_input' => $tgl_input
                );

                $insert = $this->model->insertBuku($value);

                if($insert)
                {
                    redirect('buku');
                }
            } 
        }

        public function delete()
        {
            $id = $_GET['id'];

            $delete = array
            (
                'id' => $id
            );

            $deleteBuku = $this->model->delete($delete);
            if ($deleteBuku) {
                redirect('buku');
            }
        }

        public function editPage()
        {
            $id = $_GET['id'];
            $getId = array
            (
                'id' => $id
            );

            $getBuku['buku'] = $this->model->getById($getId);
            $this->load->view('buku/v_editBuku',$getBuku);
        }

        public function editBuku()
        {
            if (isset($_POST['submit'])) 
            {
                $id = $this->input->post('id');
                $judul = $this->input->post('judul');
                $pengarang = $this->input->post('pengarang');
                $penerbit = $this->input->post('penerbit');
                $thn_terbit = $this->input->post('thn_terbit');
                $isbn = $this->input->post('isbn');
                $jumlah_buku = $this->input->post('jumlah_buku');
                $lokasi = $this->input->post('lokasi');
                $tgl_input = $this->input->post('tgl_input');

                $value = array(
                    'judul' => $judul,
                    'pengarang' => $pengarang,
                    'penerbit' => $penerbit,
                    'thn_terbit' => $thn_terbit,
                    'isbn' => $isbn,
                    'jumlah_buku' => $jumlah_buku,
                    'lokasi' => $lokasi,
                    'tgl_input' => $tgl_input
                );

                $where = array
                (
                    'id' => $id
                );

                $update = $this->model->update($value,$where);
                if ($update) {
                    redirect('buku');
                }
            }
        }


    }
?>