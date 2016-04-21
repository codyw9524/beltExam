<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sessions extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Session');
	}
	public function index()
	{	
		$this->load->view('Sessions/home');
	}
	public function create()
	{
		$this->Session->create($this->input->post());
		redirect("/");
	}

}