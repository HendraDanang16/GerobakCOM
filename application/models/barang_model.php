<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class barang_model extends CI_Model {
        
        public function getAllbarang() {

            $query=$this->db->get('barang');

            return $query->result_array();
        }
        public function tambahdatabarang(){
            $data=[
                "id_barang" => $this->input->post('id_barang',true),  
                "namabarang" => $this->input->post('namabarang',true),
                "harga" => $this->input->post('harga',true),
                "stock" => $this->input->post('stock',true),
               
               
                        
            ];

            $this->db->insert('barang',$data);
        }

        public function hapusdatabarang($id){
            $this->db->where('id_barang', $id);
            $this->db->delete('barang');
        }
        public function Kembalidatabarang($id){
            $this->db->where('id_barang', $id);
            $this->db->Back('barang');
        }

        public function getbarangByID($id){
            return $this->db->get_where('barang',['id_barang'=>$id])->row_array();
        }

        public function ubahdatabarang(){
            $data=[
                "id_barang" => $this->input->post('id_barang',true),  
                "namabarang" => $this->input->post('namabarang',true),
                "harga" => $this->input->post('harga',true),
                "stock" => $this->input->post('stock',true),
               
                        
            ];
            $this->db->where('id_barang', $this->input->post('id_barang'));
            $this->db->update('barang', $data);   
        }


        public function cariDatabarang(){
            $keyword = $this->input->post('keyword');
            $this->db->like('id_barang', $keyword);
            $this->db->or_like('namabarang', $keyword);
            $this->db->or_like('harga', $keyword);
            $this->db->or_like('stock',$keyword);
            
            
            return $this->db->get('barang')->result_array();
        }
    }
