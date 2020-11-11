<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class pesanan_model extends CI_Model {
        
        public function getAllpesanan() {

            $query=$this->db->get('pesanan');

            return $query->result_array();
        }

        public function tambahdatapesanan(){
            $data=[
                "idpelanggan" => $this->input->post('idpelanggan',true),
                "namapelanggan" => $this->input->post('namapelanggan',true),
                "idbarang" => $this->input->post('idbarang',true),
                "namabarang" => $this->input->post('namabarang',true),
                "jumlah" => $this->input->post('jumlah',true),
                "harga"  => $this->input->post('harga',true),
                "alamat" => $this->input->post('alamat',true)
            ];

            $this->db->insert('pesanan', $data);
        }

        public function hapusdatapesanan($id){
            $this->db->where('idpelanggan', $id);
            $this->db->delete('pesanan');
        }

        public function kembalidatapesanan($id){
            $this->db->where('idpelanggan', $id);
            $this->db->back('pesanan');
        }

        public function getpesananByID($id){
            return $this->db->get_where('pesanan',['idpelanggan'=>$id])->row_array();
        }

        public function ubahdatapesanan(){
            $data=[
                "idpelanggan" => $this->input->post('idpelanggan',true),
                "namapelanggan" => $this->input->post('namapelanggan',true),
                "idbarang" => $this->input->post('idbarang',true),
                "namabarang" => $this->input->post('namabarang',true),
                "jumlah" => $this->input->post('jumlah',true),
                "harga"  => $this->input->post('harga',true),
                "alamat" => $this->input->post('alamat',true)     
            ];
            $this->db->where('idpelanggan', $this->input->post('idpelanggan'));
            $this->db->update('pesanan', $data);   
        }

        public function cariDatapesanan(){
            $keyword = $this->input->post('keyword');
            $this->db->like('idpelanggan', $keyword);
            $this->db->or_like('namapelanggan', $keyword);
            $this->db->or_like('idbarang', $keyword);
            $this->db->or_like('namabarang', $keyword);
            $this->db->or_like('jumlah',$keyword);
            $this->db->or_like('harga',$keyword);
            $this->db->or_like('alamat',$keyword);
            
            return $this->db->get('pesanan')->result_array();
        }
    }
