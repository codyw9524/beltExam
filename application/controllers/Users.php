<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User');
	}
	public function create()
	{
		$this->User->register_validation();
		redirect("/");
	}
}
