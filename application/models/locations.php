<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class locations extends CI_Model {
	public function loc()
	{
		return $this->db->get('locations')->result_array();
	}
}