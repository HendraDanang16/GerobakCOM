<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
            $this->load->model('admin_model');
            $this->load->library('form_validation');

            // if($this->session->userdata('level') != "admin") {
            //     redirect('login','refresh');
            // }
    }

    public function index()
    {
        $data['title']='Dashboard - WisataKuy';
        $data['totalp'] = $this->admin_model->hitungWisata();
        $data['totalu'] = $this->admin_model->hitungUSer();
        $data['totalt'] = $this->admin_model->hitungTransaksi();

        $this->load->view('templates/header_admin',$data);
        $this->load->view('admin/index',$data);
        $this->load->view('templates/footer_admin');
    }

    public function dataAdmin() {
    	$data = array(
                'title'=>'Data Admin',
                'user'=>$this->admin_model->datatablesAdmin()
            );
            $this->load->view('templates/header_tabel',$data);
            $this->load->view('admin/dataAdmin',$data);
            $this->load->view('templates/footer_tabel',$data);
    }

    public function addAdmin() {
        $data = ['Form Menambahkan Data Admin'];
        $data['jenis_kelamin'] = ['L','P'];
        $data['title']='Data Admin';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_tabel',$data);
            $this->load->view('admin/addAdmin',$data);
            $this->load->view('templates/footer_tabel');
        }
        else {
            $this->admin_model->addAdmin();
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('admin/dataAdmin', 'refresh');
        }
    }

    public function detailAdmin($id) {
        $data['title'] = 'Detail Informasi Admin';
        $data['user'] = $this->admin_model->getAdminById($id);
        $this->load->view('templates/header_tabel',$data);
        $this->load->view('admin/detailAdmin',$data);
        $this->load->view('templates/footer_tabel',$data);
    }

    public function deleteAdmin($id) {
        $this->admin_model->deleteAdmin($id);
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('admin/dataAdmin','refresh');
    }

    public function updateAdmin($id) {
        $data = ['Form Edit Data Admin'];
        $data['user'] = $this->admin_model->getAdminById($id);
        $data['jenis_kelamin'] = ['L','P'];
        $data['title']='Data Admin';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_tabel',$data);
            $this->load->view('admin/updateAdmin',$data);
            $this->load->view('templates/footer_tabel');
        }
        else {
            $this->admin_model->updateAdmin($id);
            redirect('admin/dataAdmin', 'refresh');
        }   
    }
}

/* End of file admin.php */

?>