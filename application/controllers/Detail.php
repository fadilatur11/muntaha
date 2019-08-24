<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_t_artikel');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index($section,$id=0)
	{
        //$this->output->cache(10); // penyimpanan cache dalam hitungan menit
        $data['page'] = 'Detail';
        $data['detail'] = $this->Model_t_artikel->detail($id);
        $data['lainnya'] = $this->Model_t_artikel->lainnya();
        $data['section'] = $this->Model_t_kategori->get();
        $data['populer'] = $this->Model_t_artikel->populer(5,14);
        $artikel = $this->Model_t_artikel->detail($id);
        $dibaca = $artikel['dibaca'] + 1;
        $pv = array(
            'dibaca' => $dibaca,
            'recent' => date('Y-m-d H:i:s')
        ); // pageviews dan recent
        $this->Model_t_artikel->update($id,$pv);
		$this->load->view('detail/index',$data);
	}
}
