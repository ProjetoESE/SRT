<?php

	/**
	* 
	*/
	class Usuarios extends CI_Model
	{
		
		function cadastra($usuario)
		{
			$this->load->library('encryption');


			//encripa a senha
			$usuario['senha'] = $this->encryption->encrypt($usuario['senha']);

			if ($this->db->insert('usuarios', $usuario)) {
				redirect(base_url());
			}

		}

		function loga($dados)
			{
				$this->load->library('encryption');

				$this->db->where('email', $dados['email']);

				$usuario = $this->db->get('usuarios')->result();

				if ($dados['senha'] == $this->encryption->decrypt($usuario[0]->senha)) {
					$this->session->set_userdata('usuario', $usuario[0]);
					redirect('sistema/dashboard');
					
				}
			}
	}