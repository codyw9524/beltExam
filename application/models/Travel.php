<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travel extends CI_Model {

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
