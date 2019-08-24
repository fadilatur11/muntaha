<?php
/**
* 
*/
class Model_t_artikel extends CI_Model
{
	
	protected $_table = 'article';

	function headline()
	{
		$this->db->select('article.id as idartikel,article.judul_artikel,article.id_user,article.id_category,article.description,article.dibaca,article.thumbnail,article.gagasan,article.tgl_pub,article.recent,categories.kategori,categories.urltitle');
        $this->db->join('categories','categories.id = article.id_category');
        $this->db->where('article.headline','Y');
        $this->db->where('article.publish','Y');
		$this->db->order_by('article.tgl_pub', 'desc');
		return $this->db->get($this->_table)->result_array();
	}
	
	function artikel($category,$limit,$offset)
	{
		$this->db->select('article.id as idartikel,article.judul_artikel,article.id_user,article.id_category,article.description,article.dibaca,article.thumbnail,article.gagasan,article.tgl_pub,article.recent,categories.kategori,categories.urltitle');
        $this->db->join('categories','categories.id = article.id_category');
        $this->db->where('article.headline','N');
		$this->db->where('article.publish','Y');
		$this->db->where('article.id_category',$category);
		$this->db->offset($offset);
		$this->db->limit($limit);
		$this->db->order_by('article.tgl_pub', 'desc');
		return $this->db->get($this->_table)->result_array();
	}
	
	function search($keyword)
	{
		$this->db->join('categories','categories.id = article.id_category');
		$this->db->where('article.publish','Y');
		$this->db->like('article.judul_artikel',$keyword);
		$this->db->offset(0);
		$this->db->limit(60);
		$this->db->order_by('article.tgl_pub', 'desc');
		return $this->db->get($this->_table)->result_array();
	}

	function kategori($kategori)
	{
		$this->db->select('article.id as idartikel,article.judul_artikel,article.id_user,article.id_category,article.description,article.dibaca,article.thumbnail,article.gagasan,article.tgl_pub,article.recent,categories.kategori,categories.urltitle');
		$this->db->join('categories','categories.id = article.id_category');
		$this->db->where('article.publish','Y');
		$this->db->where('article.id_category',$kategori);
		$this->db->offset(0);
		$this->db->limit(50);
		$this->db->order_by('article.tgl_pub', 'desc');
		return $this->db->get($this->_table)->result_array();
	}

	function detail($id)
	{
		$this->db->join('categories','categories.id = article.id_category');
		$this->db->join('users','users.id = article.id_user');
		$this->db->where('article.id',$id);
		return $this->db->get($this->_table)->row_array();
	}

	function lainnya()
	{
		$this->db->select('article.id as idartikel,article.judul_artikel,article.id_user,article.id_category,article.description,article.dibaca,article.thumbnail,article.gagasan,article.tgl_pub,article.recent,categories.kategori,categories.urltitle');
		$this->db->join('categories','categories.id = article.id_category');
		//$this->db->join('users','users.id = article.id_user');
		$this->db->where('article.publish','Y');
		$this->db->where('article.headline','N');
		$this->db->limit(3);
		$this->db->order_by('article.id','random');
		return $this->db->get($this->_table)->result_array();
	}

	function populer($limit,$interval)
	{
		$this->db->select('article.id as idartikel,article.judul_artikel,article.id_user,article.id_category,article.description,article.dibaca,article.thumbnail,article.gagasan,article.tgl_pub,article.recent,categories.kategori,categories.urltitle');
		$this->db->join('categories','categories.id = article.id_category');
		//$this->db->join('users','users.id = article.id_user');
		$this->db->where('article.publish','Y');
		$this->db->where('article.headline','N');
		$this->db->where('article.tgl_pub >=', date('Y-m-d H:i:s', mktime(date("H"), date("i"), date("s"), date("m") , date("d")-$interval, date("Y"))));
        //$this->db->where('article.tgl_pub <=', date('Y-m-d H:i:s'));
		$this->db->limit($limit);
		$this->db->order_by('article.dibaca','desc');
		return $this->db->get($this->_table)->result_array();	
	}

	function update($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update($this->_table,$data);
	}

	function other($id,$limit,$offset)
	{
		$this->db->select('article.id as idartikel,article.judul_artikel,article.id_user,article.id_category,article.description,article.dibaca,article.thumbnail,article.gagasan,article.tgl_pub,article.recent,categories.kategori,categories.urltitle');
		$this->db->join('categories','categories.id = article.id_category');
		//$this->db->join('users','users.id = article.id_user');
		$this->db->where('article.publish','Y');
		$this->db->where('article.id_category',$id);
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('article.id','random');
		return $this->db->get($this->_table)->result_array();
	}

	function recent($limit,$offset)
	{
		$this->db->select('article.id as idartikel,article.judul_artikel,article.id_user,article.id_category,article.description,article.dibaca,article.thumbnail,article.gagasan,article.tgl_pub,article.recent,categories.kategori,categories.urltitle');
		$this->db->join('categories','categories.id = article.id_category');
		//$this->db->join('users','users.id = article.id_user');
		$this->db->where('article.publish','Y');
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('article.recent','desc');
		return $this->db->get($this->_table)->result_array();
	}
	
}