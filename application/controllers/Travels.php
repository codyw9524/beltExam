<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travels extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Travel');
	}

	public function index()
	{
		$this->load->view("Travels/travels_main");
	}
	public function create()
	{
		if($this->input->post())
		{
			$this->Travel->create($this->input->post());
			redirect("/Travels/");
		}
		else
		{
			$this->load->view("Travels/add_travel_plan");
		}
	}
	public function show()
	{
		$this->load->view("Travels/travel_plan_details");
	}
}
