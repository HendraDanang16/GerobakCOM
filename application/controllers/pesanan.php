<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class pesanan extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('pesanan_model');
            $this->load->library('form_validation');

            if($this->session->userdata('level')!="admin"){
                redirect('login','refresh');
            }
        }

        public function index() {

            $this->load->model('pesanan_model');

            $data['title']='List Pesanan Pelanggan';
            $data['pesanan']=$this->pesanan_model->getAllpesanan();

            if($this->input->post('keyword')){
                $data['pesanan'] = $this->guru_model->cariDatapesanan();
            }

            $this->load->view('template/header',$data);
            $this->load->view('pesanan/index',$data);
            $this->load->view('template/footer');
        }

        public function tambah() {

            $data['title']='Form Tambah Data pesanan';

            $this->form_validation->set_rules('idpelanggan', 'idpelanggan', 'required');
            $this->form_validation->set_rules('namapelanggan', 'namapelanggan', 'required');
            $this->form_validation->set_rules('idbarang', 'idbarang', 'required');
            $this->form_validation->set_rules('namabarang', 'namabarang', 'required');
            $this->form_validation->set_rules('jumlah', 'jumlah', 'required');
            $this->form_validation->set_rules('harga', 'harga', 'required');
            $this->form_validation->set_rules('alamat', 'alamat', 'required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header', $data);
                $this->load->view('pesanan/tambah', $data);
                $this->load->view('template/footer');
            }else{
                $this->pesanan_model->tambahdatapesanan();
                $this->session->set_flashdata('flash-data','Ditambahkan');
                redirect('pesanan','refresh');
            }
        }

        public function hapus($id){
            $this->pesanan_model->hapusdatapesanan($id);

            $this->session->set_flashdata('flash-data','Dihapus');
            redirect('pesanan','refresh');
        }

        public function detail($id){
            $data['title'] = 'Detail Pesanan';
            $data['pesanan'] = $this->pesanan_model->getpesananByID($id);

            $this->load->view('template/header', $data);
            $this->load->view('pesanan/detail', $data);
            $this->load->view('template/footer');
        }

        public function edit($id) {

            $data['title']='Form Edit Data Pesanan';
            $data['pesanan']=$this->pesanan_model->getpesananByID($id);

            
            $this->form_validation->set_rules('idpelanggan', 'idpelanggan', 'required');
            $this->form_validation->set_rules('namapelanggan', 'namapelanggan', 'required');
            $this->form_validation->set_rules('idbarang', 'idbarang', 'required');
            $this->form_validation->set_rules('namabarang', 'namabarang', 'required');
            $this->form_validation->set_rules('jumlah', 'jumlah', 'required');
            $this->form_validation->set_rules('harga', 'harga', 'required');
            $this->form_validation->set_rules('alamat', 'alamat', 'required');
            

            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header', $data);
                $this->load->view('pesanan/edit', $data);
                $this->load->view('template/footer');
            }else{
                $this->pesanan_model->ubahdatapesanan();
                $this->session->set_flashdata('flash-data','diedit');
                redirect('pesanan','refresh');
            }
        }
    }
