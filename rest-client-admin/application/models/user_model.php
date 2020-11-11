<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class user_model extends CI_Model {
        // public $image="default.jpg";
        public $id_user;
        
        public function datatables() {
            $query = $this->db->order_by('id_user','DESC')->get_where('user',array('level'=> 2));
            // $query=$this->db->order_by('id_user','DESC')->get('user');
            return $query->result();
        }

        public function datatablesAdmin() {
            $query = $this->db->order_by('id_user','DESC')->get_where('user',array('level'=> 1));
            // $query=$this->db->order_by('id_user','DESC')->get('user');
            return $query->result();
        }

        public function getUserById($id) {
            $this->db->get_where('user', array('id_user' => $id))->result_array();
        }

        public function deleteUser($id) {
            $this->db->where('id_user', $id);
            $this->db->delete('user');
        }        
    }
?>