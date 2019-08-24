<?php
/**
* 
*/
class Model_t_kategori extends CI_Model
{
	
	protected $_table = 'categories';

	function get()
	{
		$this->db->order_by('kategori', 'asc');
		return $this->db->get($this->_table)->result_array();
    }
    
    function kategori($kategori)
	{
        $this->db->where('urltitle',$kategori);
		return $this->db->get($this->_table)->row_array();
	}
}