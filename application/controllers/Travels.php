<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travels extends CI_Controller {

	public function index()
	{
		$this->load->view("Travels/travels_main");
	}
}
