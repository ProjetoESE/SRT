<?php 

	class Sistema extends CI_Controller
		{

			public function __construct()
			{
				parent::__construct();
				$this->load->model('Projetos');
			}

			public function index(){
				if (!$this->session->userdata('usuario')) {
					$this->load->view('inicio/login');
				}else{
					redirect('sistema/dashboard');
				}
				
			}


			public function dashboard()
				{
						if (!$this->session->userdata('usuario'))
						redirect();
					$data['projetos'] = $this->Projetos->projetosPublicos();

						$this->load->view('sistema/inc/header');
						$this->load->view('sistema/dashboard', $data);
						$this->load->view('sistema/inc/footer');
					
				}


			public function meusprojetos()
				{
					if (!$this->session->userdata('usuario'))
						redirect();


					$this->load->view('sistema/inc/header');

					$data['meusprojetos'] = $this->Projetos->meusProjetos();
					
					$this->load->view('sistema/meusprojetos', $data);
					$this->load->view('sistema/inc/footer');

				}

			public function detalhe($id)
				{

				}

				public function novoprojeto()
					{
						if (!$this->session->userdata('usuario'))
						redirect();


							$this->load->view('sistema/inc/header');
							$this->load->view('sistema/novoprojeto');
							$this->load->view('sistema/inc/footer');
						
					}

			public function salvaprojeto()
				{
					if (!$this->session->userdata('usuario'))
						redirect();

					$projeto['titulo'] = $this->input->post('titulo');
					$projeto['descricao'] = $this->input->post('descricao');
					$projeto['usuario_id'] = $this->session->get_userdata('usuario')['usuario']->id;


					$this->Projetos->novoProjeto($projeto);
				}

			public function sair()
				{
					$this->session->sess_destroy();
					redirect();
				}

			public function deletar($id)
				{
					$this->Projetos->deletar($id);
				}
			
		}