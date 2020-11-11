<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class admin_model extends CI_Model {
        public $image="default.jpg";
        public $id_user;

        public function datatablesAdmin() {
            $query = $this->db->order_by('id_user','DESC')->get_where('user',array('level'=> 1));
            // $query=$this->db->order_by('id_user','DESC')->get('user');
            return $query->result();
        }     

        public function hitungWisata() {
            return $this->db->count_all('wisata');
        }

        
        
        public function hitungUser() {
            return $this->db->count_all('user');
        }

        public function hitungTransaksi() {
            // return $this->db->count_all('petugas');
        }

        public function addAdmin() {
            $this->id_user = uniqid();
            $data = array(
                "nama" => $this->input->post('nama','true'),
                "jenis_kelamin" => $this->input->post('jenis_kelamin','true'),
                "email" => $this->input->post('email','true'),
                "telepon" => $this->input->post('telepon','true'),
                "username" => $this->input->post('username','true'),
                "password" => $this->input->post('password','true'),
                "image" => $this->uploadImage()
            );
            $this->db->insert("user",$data);
        }

        public function uploadimage() {
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['file_name'] = $this->id_user;
            $config['overwrite'] = true;
            $config['max_size'] = 1024;

            $this->upload->initialize($config);
            $this->load->library('upload',$config);
            if($this->upload->do_upload('image')) {
                return $this->upload->data("file_name");
            }
            return "default.jpg";
        }

        public function getAdminById($id) {
            return $this->db->get_where('user', array('id_user' => $id))->result_array();
        }

        public function deleteAdmin($id) {
            $this->db->where('id_user', $id);
            $this->db->delete('user');
        }

        public function updateAdmin() {
            $post = $this->input->post();
            $this->id_user = $post["id_user"];
            $this->nama = $post["nama"];
            $this->jenis_kelamin = $post['jenis_kelamin'];
            $this->email = $post['email'];
            $this->telepon = $post['telepon'];
            $this->username = $post['username'];
            $this->password = $post['password'];

            if(!empty($_FILES["image"]["name"])) {
                $this->image = $this->uploadimage();
            }
            else {
                $this->image = $post["old_image"];
            }

            $this->db->update('user', $this, array('id_user' => $post['id_user']));
            }
    }
?>