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
			$this->Travel->create($this->input->post(), $this->session->userdata('user_id');
			return TRUE;
		}
	}
	public function create($post, $user_id)
	{
		$query1 = "INSERT INTO travels (destination, description, start_date, end_date, creator_id, updated_at, created_at) VALUES (?, ?, ?, ?, NOW(), NOW())";
		$values = array(htmlspecialchars($post['destination']), htmlspecialchars($post['description']), $post['start_date'], $post['end_date'], $user_id);
		$this->db->query($query1, $values);

		$travel_id = $this->db->query("SELECT * FROM travels ORDER BY id DESC LIMIT 1")->row_array();

		$query2 = "INSERT INTO travels_users (user_id, travel_id) VALUES (?, ?)";
		$values = array($this->session->userdata('user_id'), $travel_id['id']);
		$this->db->query($query2, $values);
	}
	public function show_by_user_id($user_id)
	{
		$query = "SELECT
					travels.id as 'travels_id',
					travels.destination,
				    travels.description,
				    travels.start_date,
				    travels.end_date,
				    travels_users.user_id as 't_v_user_id',
				    travels_users.travel_id as 't_v_travel_id',
					users.id as 'users_id',
					CONCAT(users.first_name, ' ', users.last_name) as 'name',
				    users.username  
				FROM travels
				JOIN travels_users on travels.id = travels_users.travel_id
				JOIN users on users.id = travels_users.user_id
				WHERE users.id = ?;";
		$values = array($user_id);
		return $this->db->query($query, $values)->result_array();
	}
	public function show($user_id)
	{
		return $this->db->query("SELECT
					travels.id as 'travels_id',
					travels.destination,
				    travels.description,
				    travels.start_date,
				    travels.end_date,
				    travels_users.user_id as 't_v_user_id',
				    travels_users.travel_id as 't_v_travel_id',
					users.id as 'users_id',
					CONCAT(users.first_name, ' ', users.last_name) as 'name',
				    users.username  
				FROM travels
				JOIN travels_users on travels.id = travels_users.travel_id
				JOIN users on users.id = travels_users.user_id
				WHERE users.id != ?
				GROUP BY travels.id;", array($user_id))->result_array();
	}
	public function join_trip($user_id, $travel_id)
	{
		$query = "INSERT INTO travels_users (user_id, travel_id) VALUES (?,?)";
		$values = array($user_id, $travel_id);
		$this->db->query($query, $values);
	}
	public function show_by_travel_id($travel_id)
	{
		return $this->db->query("SELECT 
									travels.id as 'travels_id',
									users.id as 'users_id',
								    CONCAT(users.first_name, ' ', users.last_name) as 'name',
								    travels.destination,
								    travels.description,
								    travels.start_date,
								    travels.end_date,
								    travels.creator_id
								FROM users
								JOIN travels ON travels.creator_id = users.id
								WHERE travels.id = ?;", array($travel_id))->row_array();
	}
	public function other_users_on_trip($travel_id)
	{
		return $this->db->query("SELECT
									travels.id as 'travels_id',
								    travels.creator_id as 'travels_cr_id',
									travels.destination,
								    travels.description,
								    travels.start_date,
								    travels.end_date,
								    travels_users.user_id as 't_v_user_id',
								    travels_users.travel_id as 't_v_travel_id',
									users.id as 'users_id',
									CONCAT(users.first_name, ' ', users.last_name) as 'name',
								    users.username  
								FROM travels
								JOIN travels_users on travels.id = travels_users.travel_id
								JOIN users on users.id = travels_users.user_id
								WHERE travels.id = ? AND travels.creator_id != users.id;", array($travel_id))->result_array();
	}
}	
