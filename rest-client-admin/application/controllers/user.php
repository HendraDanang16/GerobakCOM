<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct()
        {
            parent::__construct();
            $this->load->model('user_model');
            $this->load->library('form_validation');

            // if($this->session->userdata('level') != "admin") {
            //     redirect('login','refresh');
            // }
        }

    public function index()
    {
        // $data['title']='Halaman User';
        $data = array(
                'title'=>'Data user',
                'user'=>$this->user_model->datatables()
            );
            $this->load->view('templates/header_tabel',$data);
            $this->load->view('user/index',$data);
            $this->load->view('templates/footer_tabel',$data);
    }

    public function detailUser($id) {
        $data['title'] = 'Detail Informasi User';
        $data['user'] = $this->user_model->getUserById($id);
        $this->load->view('templates/header_tabel',$data);
        $this->load->view('user/detailUser',$data);
        $this->load->view('templates/footer_tabel',$data);
    }

    public function deleteUser($id) {
        $this->user_model->deleteUser($id);
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('user/index','refresh');
    }

}

/* End of file user.php */

?>