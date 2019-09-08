<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_t_artikel');
		date_default_timezone_set('Asia/Jakarta');
	}

	function index($id=0)
	{
        //$this->output->cache(10); // penyimpanan cache dalam hitungan menit
        $data['page'] = 'detail';
        $data['video'] = $this->Model_t_artikel->detail($id);
        $data['lainnya'] = $this->Model_t_artikel->other(3,3,0);
        $artikel = $this->Model_t_artikel->detail($id);
        $dibaca = $artikel['dibaca'] + 1;
        $pv = array('dibaca' => $dibaca);
        $this->Model_t_artikel->update($id,$pv);
		$this->load->view('video/index',$data);
	}
}
