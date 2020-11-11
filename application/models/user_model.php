<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class user_model extends CI_Model {
        
        public function getAllbuku() {

            $query=$this->db->get('buku');

            return $query->result_array();
        }

        public function hapusdatabuku($id){
            $this->db->where('id', $id);
            $this->db->delete('buku');
        }
        public function Kembalidatabuku($id){
            $this->db->where('id', $id);
            $this->db->Back('buku');
        }

        public function getbukuByID($id){
            return $this->db->get_where('buku',['id'=>$id])->row_array();
        }


        public function cariDatabuku(){
            $keyword = $this->input->post('keyword');
            $this->db->like('id', $keyword);
            $this->db->or_like('judul', $keyword);
            $this->db->or_like('pengarang', $keyword);
            $this->db->or_like('penerbit',$keyword);
            $this->db->or_like('tahun_terbit',$keyword);
            $this->db->or_like('isi',$keyword);
            return $this->db->get('buku')->result_array();
        }
    }
