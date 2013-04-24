<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('article_model');
		$this->load->helper('header');
	}

	public function index()
	{
		$list = $this->article_model->get_list();
		// var_dump($list);
		$this->load->view('default');
	}
}