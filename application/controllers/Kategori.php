<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_t_artikel');
		// $this->load->model('Model_t_kategori');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index($kategori=0)
	{
        //$this->output->cache(10); // penyimpanan cache dalam hitungan menit
        $data['page'] = 'Kategori';
        $idkategori = $this->Model_t_kategori->kategori($kategori);
		$data['kategori'] = $this->Model_t_artikel->kategori($idkategori['id']);
		$data['section'] = $this->Model_t_kategori->get();
		$this->load->view('kategori/index',$data);
	}
}
