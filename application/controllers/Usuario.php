<?php
	class Usuario extends CI_Controller
		{
	
			public function cadastro()
				{
					$this->load->view('inicio/cadastro');
				}

			public function cadastrar()
				{
					$usuario['nome'] = $this->input->post('nome');
					$usuario['sobrenome'] = $this->input->post('sobrenome');
					$usuario['email'] = $this->input->post('email');
					$usuario['profissao'] = $this->input->post('profissao');
					$usuario['senha'] = $this->input->post('senha');

					$this->load->model('usuarios');

					$this->usuarios->cadastra($usuario);
				}
			
		}