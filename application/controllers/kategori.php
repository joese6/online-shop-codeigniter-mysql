<?php
    class Kategori extends CI_Controller{
        public function aksesoris(){
            $data['aksesori']=$this->model_kategori->data_aksesori()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('aksesoris',$data);
            $this->load->view('templates/footer');
        }
        public function sepatu_pria(){
            $data['sepatupria']=$this->model_kategori->data_sepatu_pria()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('sepatupria',$data);
            $this->load->view('templates/footer');
        }
        public function sepatu_wanita(){
            $data['sepatuwanita']=$this->model_kategori->data_sepatu_wanita()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('sepatuwanita',$data);
            $this->load->view('templates/footer');
        }
        public function sepatu_anak(){
            $data['sepatuanak']=$this->model_kategori->data_sepatu_anak()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('sepatuanak',$data);
            $this->load->view('templates/footer');
        }
        public function peralatan_olahraga(){
            $data['peralatanolahraga']=$this->model_kategori->data_peralatan_olahraga()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('peralatanolahraga',$data);
            $this->load->view('templates/footer');
        }
    }
?>