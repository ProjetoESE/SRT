<?php
	class User extends CI_Controller
		{
	
			public function register()
				{
					$this->load->view('inicio/register');
				}

			public function signup()
				{
					$user['name'] = $this->input->post('name');
					$user['lastname'] = $this->input->post('lastname');
					$user['email'] = $this->input->post('email');
					$user['profession'] = $this->input->post('profession');
					$user['password'] = $this->input->post('password');

					$this->load->model('users');

					$this->users->register($user);
				}
			
		}