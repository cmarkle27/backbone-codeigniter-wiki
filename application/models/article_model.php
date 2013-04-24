<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 *
 */
class Article_model extends CI_Model {

	public function __construct()
	{
		parent:: __construct();
	}

	// ------------------------------------------------------------------------

	public function get_list()
	{
		return $this->db
			->select('*')
			->from('articles')
			->get()
			->result();
	}

}