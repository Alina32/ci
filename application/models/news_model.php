<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

	private $table_name = 'latest_news';

	public function get_latest_news($amount_news = 3)
	{

		return $this->db->from($this->table_name)->limit($amount_news)->get()->result_array();	
	}
	public function get_single_news($identificator)
	{
		if ( !is_null($identificator) ) {
			$this->db->where('id', $identificator);
		}
		else {
			$this->db->order_by('id', 'desc');
		}
		return $this->db->from($this->table_name)
			->limit(1)
			->get()
			->result_array();	
	}
	public function insert_news ($data) {
		$this->db->insert($this->table_name, $data); 
	}
}