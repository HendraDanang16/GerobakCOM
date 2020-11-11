<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class wisata extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->model('admin_model');
            $this->load->model('wisata_model');
            $this->load->library('form_validation');

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
        $this->load->view('templates/header_tabel',$data);
        $this->load->view('wisata/index',$data);
        $this->load->view('templates/footer_tabel',$data);
    }

    public function update() {
        $id = $this->put('id_wisata');
        $data['title']='Form Edit Data Wisata';

        $data = [
            'nama_wisata' => $this->put('nama_wisata'),
            'deskripsi' => $this->put('deskripsi'),
            'lokasi' => $this->put('lokasi'),
            'harga' => $this->put('harga'),
            'jam_buka' => $this->put('jam_buka'),
            'jam_tutup' => $this->put('jam_tutup')
            
        ];    
        if($this->wisata_model->update($data, $id) > 0) {
                $this->load->view('templates/header_admin',$data);
                $this->load->view('wisata/update',$data);
                $this->load->view('template/footer_admin');
            }
            else {
                $this->wisata_model->update();
                redirect('wisata', 'refresh');
            }
    }

}

/* End of file wisata.php */

?>