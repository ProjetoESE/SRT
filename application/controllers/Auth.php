<?php

	class Auth extends CI_Controller
		{
	
			public function login()
				{
					$data['email'] = $this->input->post('email');
					$data['password'] = $this->input->post('password');

					$this->load->model('users');

					$this->users->login($data);
				}

			public function confirmEmail()
				{
					$this->load->model('users');

					$data = array(
						'email' => $this->input->get('email'),
						'token' => $this->input->get('token')
					);

					$this->users->grantAccess($data);
				}
			
		}