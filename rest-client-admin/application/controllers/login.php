<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->library('form_validation');    
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('login_model');
    }

    public function index() {
        $data['title'] = 'WisataKuy';
        $this->load->view('templates/header_login',$data);
        $this->load->view('login/index',$data);
        $this->load->view('templates/footer_login');
    }

    public function proses_login() {
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars($this->input->post('password'));

        $cek = $this->login_model->login($username, $password);

        if($cek) {
            foreach ($cek as $row);
                $this->session->set_userdata('user', $row->username);
                $this->session->set_userdata('id_user', $row->id);
                $this->session->set_userdata('level', $row->level);

                if($this->session->userdata('level') == 1) {
                    redirect('admin/index');
                }
                else if($this->session->userdata('level') == 2) {
                    redirect('halamanUser');
                }
        }
        else {
            $data['pesan'] = 'Username dan Password Anda Salah';
                $data['title'] = 'Login Wisata';
                $this->load->view('templates/header_login', $data);
                $this->load->view('login/index', $data);
                $this->load->view('templates/footer_login');
        }
    }

    public function register() {
        $data['title'] = 'Register';
        $data['jenis_kelamin']=['L','P'];
        $this->form_validation->set_rules('nama', 'Nama lengkap', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('email', 'Email' , 'required|valid_email');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');
        $this->form_validation->set_rules('username', 'Username' ,'required');
        $this->form_validation->set_rules('password', 'Password' ,'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_login',$data);
            $this->load->view('login/register',$data);
            $this->load->view('templates/footer_login');
        }
        else {
            $this->login_model->register();
            redirect('login', 'refresh');
        }
    }
}

/* End of file login.php */

?>