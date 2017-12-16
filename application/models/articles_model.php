<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles_model extends CI_Model {

	private $table = "articles";

	public $data = null;

	public function get_articles()
	{
		$this->data = $this->db->get($this->table);
		return $this->data->result_array();
	}
}