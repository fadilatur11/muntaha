<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_t_artikel');
		$this->load->model('Model_t_kategori');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
        //$this->output->cache(10); // penyimpanan cache dalam hitungan menit
		$data['page'] = 'Beranda';
		$data['kategori'] = $this->Model_t_kategori->get();
		$data['headline'] = $this->Model_t_artikel->headline();
		$data['nahwu'] = $this->Model_t_artikel->artikel(1,4,0);
		$data['sb'] = $this->Model_t_artikel->artikel(4,1,0);
		$data['sb1'] = $this->Model_t_artikel->artikel(4,10,1);
		$data['shorof'] = $this->Model_t_artikel->artikel(5,4,0);
		$data['shorof1'] = $this->Model_t_artikel->artikel(5,4,5);
		$data['populer'] = $this->Model_t_artikel->populer(5,14);
		$data['kajian'] = $this->Model_t_artikel->artikel(3,6,0);
		$data['recent'] = $this->Model_t_artikel->recent(5,0);
		$this->load->view('beranda/index',$data);
	}
}
