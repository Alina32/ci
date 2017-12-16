<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index ()
	{
		$this->load->model('news_model');
		$data['latest_news'] = $this->news_model->get_latest_news();
		$this->load->view('static/header_view', $data);
		$this->load->view('news_viewer', $data);
		$this->load->view('static/footer_view', $data);
	}

	public function single_news ($id = NULL) {
		$this->load->model('news_model');
		$data['single_news'] = $this->news_model->get_single_news($id);
		$this->load->view('static/header_view', $data);
		$this->load->view('single_news_viewer', $data);
		$this->load->view('static/footer_view', $data);
	}

	public function insert_news() {
		if ( !empty($_POST) ) {
			$request['request'] = $this->input->post();// добавляем данные из формы в элемент массива $request с ключом  'request'
			$request_to_db = Array(
				'title' => $request['request']['title'],
				'date' => date('Y-m-d'),
				'description' => $request['request']['desc'],
				'author' => $request['request']['author'],
			);
			$this->load->model('news_model');
			$this->news_model->insert_news($request_to_db);
		}
		$this->load->view('static/header_view');
		$this->load->view('insert_news');
		$this->load->view('static/footer_view');
	}
}