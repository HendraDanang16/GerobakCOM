<?php

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('barang_model');
        if ($this->session->userdata('masuk') != TRUE) {
            $this->load->helper('url');
            redirect('login');
        }
    }
    function index()
    {
        if($this->session->userdata('akses') =='1'){     

            $datatitle['title'] = 'Beranda Admin';
            $this->load->view("template/header", $datatitle);        
            $this->load->view("Home/index");  
            $this->load->view("template/footer");
        } else {
            echo "Access Denied";
        }
    }
    public function show_dosen($bg){
        if($this->session->userdata('akses') == '1'){
            $bg = array('bg' => $bg);
            $data['barang'] = $this->barang_model->edit_tampil($bg,'barang')->result();
            $info = $this->barang_model->edit_tampil($bg,'barang')->result();
            $user = $this->barang_model->edit_tampil($bg,'user')->result();
            $dataa = array(
                'info' => $info,
                'user' => $user
            );
            $this->load->view('barang',$dataa);              
        }
        else{            
            echo '<script type="text/javascript">alert("Sesi habis! Login Lagi!")</script>'; 
            $this->load->view('login');
        }         
    }
}