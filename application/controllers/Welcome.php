<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 /** 
	  * index
	public function index()
	{
		$this->load->view('welcome_message');
	}
	*/
	public function index(){
		$data['barang']=$this->model_barang->tampil_data()->result();


		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard',$data);
		$this->load->view('templates/footer');

	}
	public function detail_produk($id_brg){
		$data['prod']=$this->model_barang->detail_brg($id_brg);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_barang',$data);
		$this->load->view('templates/footer');
	}

	public function cari(){
		$key = $this->input->post('katakunci');
		$data['barang']=$this->model_barang->get_key($key);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard',$data);
		$this->load->view('templates/footer');
	}
}
