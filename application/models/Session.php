<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Session extends CI_Model {

	public function create($post)
	{	
		$this->load->model('User');
		$user = $this->User->show($post);
		if(count($user) > 0 && password_verify($post['password'], $user['password']) === TRUE)
		{
			$user_info = array('user_id' => $user['id'],
								'first_name' => $user['first_name'],
								'last_name' => $user['last_name'],
								'email' => $user['email'],
								'is_logged_in' => TRUE
								);
			$this->session->set_userdata($user_info);
		}
		else
		{
			$this->session->set_flashdata('error', "<p class='error'>Username and/or password provided were incorrect</p>");
		}
	}	
}
