<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class buku extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('buku_model');
            $this->load->library('form_validation');

            if($this->session->userdata('level')!="admin"){
                redirect('login','refresh');
            }
        }

        public function index() {

            $this->load->model('buku_model');

            $data['title']='List buku';
            $data['buku']=$this->buku_model->getAllbuku();

            if($this->input->post('keyword')){
                $data['buku'] = $this->buku_model->cariDatabuku();
            }

            $this->load->view('template/header',$data);
            $this->load->view('buku/index',$data);
            $this->load->view('template/footer');
        }

        public function tambah() {

            $data['title']='Form Tambah Data buku';

            $this->form_validation->set_rules('id', 'id', 'required|numeric');
            $this->form_validation->set_rules('judul', 'judul', 'required');
            $this->form_validation->set_rules('pengarang', 'pengarang', 'required');
            $this->form_validation->set_rules('penerbit', 'penerbit', 'required');
            $this->form_validation->set_rules('tahun_terbit', 'tahun_terbit', 'required|numeric');

            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header', $data);
                $this->load->view('buku/tambah', $data);
                $this->load->view('template/footer');
            }else{
                $this->buku_model->tambahdatabuku();
                $this->session->set_flashdata('flash-data','ditambahkan');
                redirect('buku','refresh');
            }
        }

        public function hapus($id){
            $this->buku_model->hapusdatabuku($id);

            $this->session->set_flashdata('flash-data','dihapus');
            redirect('buku','refresh');
        }

        public function detail($id){
            $data['title'] = 'Detail buku';
            $data['buku'] = $this->buku_model->getbukuByID($id);

            $this->load->view('template/header', $data);
            $this->load->view('buku/detail', $data);
            $this->load->view('template/footer');
        }

        public function edit($id) {

            $data['title']='Form Edit Data buku';
            $data['buku']=$this->buku_model->getbukuByID($id);

            
            $this->form_validation->set_rules('id', 'id', 'required|numeric');
            $this->form_validation->set_rules('judul', 'judul', 'required');
            $this->form_validation->set_rules('pengarang', 'pengarang', 'required');
            $this->form_validation->set_rules('penerbit', 'penerbit', 'required');
            $this->form_validation->set_rules('tahun_terbit', 'tahun_terbit', 'required|numeric');

            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header', $data);
                $this->load->view('buku/edit', $data);
                $this->load->view('template/footer');
            }else{
                $this->buku_model->ubahdatabuku();
                $this->session->set_flashdata('flash-data','diedit');
                redirect('buku','refresh');
            }
        }
    }
