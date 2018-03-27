<?php

	class Auth extends CI_Controller
		{
	
			public function login()
				{
					$dados['email'] = $this->input->post('email');
					$dados['senha'] = $this->input->post('senha');

					$this->load->model('usuarios');

					$this->usuarios->loga($dados);
				}

			public function confirmaemail($tokem)
				{
					echo "cofirmação de email";
				}
			
		}