<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {

	public function index()
	{
		$this->load->model('article_model');
		$list = $this->article_model->get_list();
		var_dump($list);
		// $this->load->view('welcome_message');
	}
}