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
		$session_user_trips = $this->Travel->show_by_user_id($this->session->userdata('user_id'));
		$all_user_trips = $this->Travel->show($this->session->userdata('user_id'));
		$this->load->view("Travels/travels_main", array('session_user_trips' => $session_user_trips, 'all_user_trips' => $all_user_trips));
	}
	public function add()
	{
		$this->load->view("Travels/add_travel_plan");
	}
	public function create()
	{
		if($this->Travel->add_trip_validation() === FALSE)
		{
			redirect("/Travels/add");
		}
		else
		{
			redirect("/Travels/");
		}
	}
	public function show()
	{
		$this->load->view("Travels/travel_plan_details");
	}
	public function join()
	{
		$this->Travel->join($this->session->userdata('user_id'), $this->uri->segment(3));
		redirect("/Travels/")
	}
}
