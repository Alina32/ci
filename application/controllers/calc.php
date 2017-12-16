<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calc extends CI_Controller {

	public function index()
	{
		$data["result"]["POST"] = !empty($_POST)? $this->input->post():null;
		if ($data["result"]["POST"]) {
			$data["result"]["calc"] = $data["result"]["POST"]["x"] + $data["result"]["POST"]["y"];
		}
		$this->load->view('calc_view', $data['result']);		
	}

}
