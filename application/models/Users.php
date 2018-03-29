<?php

	class Users extends CI_Model
	{
		
		function register($user)
		{
			$this->load->library('encryption');


			//encripa a password
			$user['password'] = $this->encryption->encrypt($user['password']);

			//gera token de comfirmação
			$frase = 'E-mail confirmation token';

			$token = substr($this->encryption->encrypt($frase), 0, 100);

			$access = array(
				'email' => $user['email'],
				'token' => $token
			);

			$this->db->insert('email_confirmation', $access);

			if ($this->db->insert('users', $user)) {

				$url_auth = base_url('index.php/auth/confirmaemail?email=') . $user['email'] . '&token=' . $token;

				$message = 'E-mail confirmation <br>';
				$message .= 'Click the link bellow to confirm your e-mail';
				$message .= '<a href="'. $url_auth .'">Confirm e-mail</a>';

				$this::sendEmail($message, 'Confirm your e-mail', $user['email']);


				//eviar o email

				$str = 'Email <strong>' . $user['email'] . '</strong> registered successfully. Check your e-mail to confirm your registration.';
					$msg = array(
						'type' => 'success',
						'text' => $str
					);
					$this->session->set_flashdata('msg', $msg);
					redirect(base_url('index.php'));

			}

		}

		public function searchEmail($email)
			{
				$this->db->where('email', $email);

				if ($this->db->get('users')->result()) {
					return true;
				}
					return false;

			}

		function login($data)
			{
				$this->load->library('encryption');

				$this->db->where('email', $data['email']);

				$user = $this->db->get('users')->result();

				if(!$user[0]->access){

					$str = 'Email: <strong>' . $data['email'] . '</strong> awating confirmation. Please check your e-mail.';
					$msg = array(
						'type' => 'danger',
						'text' => $str
					);
					$this->session->set_flashdata('msg', $msg);
					redirect(base_url('index.php'));
				}
				

				if ($data['password'] == $this->encryption->decrypt($user[0]->password)) {
					$this->session->set_userdata('user', $user[0]);
					redirect(base_url('index.php/') . 'sistema/dashboard');
					
				}
				
			}

		public function updateProfile($user)
			{
				$this->db->where('id', $user['id']);
				if ($this->db->update('users', $user)) {
					$this->session->unset_userdata('user');

					$user = $this->db->get('users')->result();
					$this->session->set_userdata('user', $user[0]);
					redirect(base_url('index.php'));
				}
			}


		public function grantAccess($data)
			{
				$this->db->where('email', $data['email']);
				$result = $this->db->get('email_confirmation')->result();

				if ($data['token'] == $result[0]->token) {
					$this->db->where('email', $data['email']);
					$user = $this->db->get('users')->result();

					$updatedUser = array(
						'access' => TRUE
					);

					$this->db->update('users', $updatedUser);
					$msg = array(
						'type' => 'success',
						'text' => 'E-mail confirmed successfully. You can log in!'
					);
					$this->session->set_flashdata('msg', $msg);
					redirect(base_url('index.php'));
				}
			}

		public function userInfo($email)
			{
				$this->db->where('email', $email);

				return $this->db->get('users')->result()[0];
			}

		function sendEmail($message, $subject, $to)
		{

			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'ssl://smtp.googlemail.com';
			$config['smtp_port'] = '465';
			$config['smtp_timeout'] = '30';
			$config['smtp_user'] = 'projetophp123@gmail.com';
			$config['smtp_pass'] = 'Projeto123@';
			$config['charset'] = 'utf-8';
			$config['newline'] = '\r\n';
			$config['mailtype'] = 'html';

			$this->load->library('email', $config);

			$this->email->from('projetophp123@gmail.com', $subject);
			$this->email->to($to);
			$this->email->subject($subject);
			$this->email->message($message);

			return $this->email->send();

		}
	}


