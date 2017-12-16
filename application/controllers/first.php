<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {

	public function news()
	{
		$this->load->model('articles_model');
		$data['articles'] = $this->articles_model->get_articles();
		$this->load->view('firstviewer', $data);
	}
}
