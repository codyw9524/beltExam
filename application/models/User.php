<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function form_validate_rules(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|alpha');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|alpha');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules("password", "Password", "required|min_length[8]");
		$this->form_validation->set_rules("pass_confirm", "Confirmation", "required|matches[password]");
	}
	public function create($post)
	{
		$query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at) VALUES (?, ?, ?, ?, NOW(), NOW())";
		$values = array(htmlspecialchars($post['first_name']), htmlspecialchars($post['last_name']), $post['email'], password_hash($post['password'], PASSWORD_DEFAULT));
		$this->db->query($query, $values);
	}
	public function show($email)
	{
		return $this->db->query("SELECT * FROM users WHERE email = ?", array($email['email']))->row_array();
	}

	public function register_validation()
	{
		$this->form_validate_rules();
		if($this->form_validation->run() === FALSE)
		{	
			$errors = array('first_name' => form_error('first_name'),
							'last_name' => form_error('last_name'),
							'email' => form_error('email'),
							'password' => form_error('password'),
							'pass_confirm' => form_error('pass_confirm'));
			$this->session->set_flashdata($errors);
		}
		else
		{
			$this->User->create($this->input->post());
			$this->session->set_flashdata('registration_confirmed', "<p class='confirm'>Thank you for registering.  You may now log in</p>");
		}
	}
}
