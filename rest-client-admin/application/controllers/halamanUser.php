<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class halamanUser extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->model('wisata_model');
            // $this->load->library('form_validation');

            // if($this->session->userdata('level') != "admin") {
            //     redirect('login','refresh');
            // }
    }

    public function index()
    {
        $data = array(
            'title'=>'Data Wisata',
            'wisata'=>$this->wisata_model->getAll()
            
        );
        $this->load->view('templates/header_user',$data);
        $this->load->view('halamanUser/index',$data);
        $this->load->view('templates/footer_user',$data);
    }

}

/* End of file halamanUser.php */

?>