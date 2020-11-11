<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {

    function login($username, $password) {
        $this->db->select('id_user, username, password, level');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query = $this->db->get();
        if($query->num_rows()==1) {
            return $query->result();
        }
        else {
            return false;
        }
    }

    public function register() {
        $data = [
            "nama" => $this->input->post('nama','true'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin','true'),
            "email" => $this->input->post('email','true'),
            "telepon" => $this->input->post('telepon','true'),
            "username" => $this->input->post('username','true'),
            "password" => $this->input->post('password','true')
        ];
        $this->db->insert('user',$data);
    }

}

/* End of file login_model.php */

?>