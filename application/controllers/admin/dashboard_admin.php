<?php
    class Dashboard_admin extends CI_Controller {
        public function __construct(){
            parent::__construct();
            if($this->session->userdata('role_id')!='1'){
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Anda Belum login !</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');

              redirect('auth/login');
            }
        }
        public function index() {
            
            $a['a']=$this->model_barang->aksesoris();
            $b['b']=$this->model_barang->sepatu_pria();
            $c['c']=$this->model_barang->sepatu_wanita();
            $d['d']=$this->model_barang->sepatu_anak();
            $e['e']=$this->model_barang->peralatan_olahraga();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/dashboard',$a+$b+$c+$d+$e);
            $this->load->view('templates_admin/footer');
        }
     
     
    }

?>