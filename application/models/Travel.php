<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travel extends CI_Model {

	public function form_validate_rules(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('destination', 'Destination', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('start_date', 'Start Date', 'required');
		$this->form_validation->set_rules("end_date", "End Date", "required");
	}

	public function add_trip_validation()
	{
		$this->form_validate_rules();
		if($this->form_validation->run() === FALSE)
		{	
			$errors = array('destination' => form_error('destination'),
							'description' => form_error('description'),
							'start_date' => form_error('start_date'),
							'end_date' => form_error('end_date')
							);
			$this->session->set_flashdata($errors);
			return FALSE;
		}
		else
		{
			$this->Travel->create($this->input->post());
			return TRUE;
		}

	public function create($post)
	{
		$query1 = "INSERT INTO travels (destination, description, start_date, end_date, updated_at, created_at) VALUES (?, ?, ?, ?, NOW(), NOW())";
		$values = array(htmlspecialchars($post['destination']), htmlspecialchars($post['description']), $post['start_date'], $post['end_date']);
		$this->db->query($query1, $values);

		$travel_id = $this->db->query("SELECT * FROM travels ORDER BY id DESC LIMIT 1")->row_array();

		$query2 = "INSERT INTO travels_users (user_id, travel_id) VALUES (?, ?)";
		$values = array($this->session->userdata('user_id'), $travel_id['id']);
		$this->db->query($query2, $values);
	}
}	
