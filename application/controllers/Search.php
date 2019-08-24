<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_t_artikel');
		// $this->load->model('Model_t_kategori');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
        //$this->output->cache(10); // penyimpanan cache dalam hitungan menit
        $data['page'] = 'Search';
        $keyword = $this->input->post('keyword');
        $data['search'] = $this->Model_t_artikel->search($keyword);
		$this->load->view('search/index',$data);
	}
}
