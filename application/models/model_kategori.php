<?php
    class Model_kategori extends CI_Model{
        public function data_aksesori(){
            return $this->db->get_where('tb_barang',array('kategori'=>'Aksesoris'));
        }
        public function data_sepatu_pria(){
            return $this->db->get_where('tb_barang',array('kategori'=>'Sepatu Pria'));
        }
        public function data_sepatu_wanita(){
            return $this->db->get_where('tb_barang',array('kategori'=>'Sepatu Wanita'));
        }
        public function data_sepatu_anak(){
            return $this->db->get_where('tb_barang',array('kategori'=>'Sepatu Anak'));
        }
        public function data_peralatan_olahraga(){
            return $this->db->get_where('tb_barang',array('kategori'=>'Peralatan Olahraga'));
        }
    }
?>