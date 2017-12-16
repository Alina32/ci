<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State_model extends CI_Model {

	private $table_name = 'state';

	public function get_states()
	{
		return $this->db->from($this->table_name)->get()->result_array();	
	}

}