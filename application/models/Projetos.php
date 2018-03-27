<?php

	class Projetos extends CI_Model
	{
		public function projetosPublicos()
			{
				$this->db->order_by('id', 'desc');
				return $this->db->get('projetos')->result();
			}
		
		public function novoProjeto($projeto)
			{
				if ($this->db->insert('projetos', $projeto)) {
					redirect('sistema/dashboard');
				}
			}

		public function meusProjetos()
			{
				$this->db->where('usuario_id', $id = $this->session->get_userdata('usuario')['usuario']->id);

				$this->db->order_by('id', 'desc');

				return $this->db->get('projetos')->result();
				
			}

		public function deletar($projeto_id)
			{
				$this->db->where('id', $projeto_id);

				if ($this->db->delete('projetos')) {
					redirect('sistema/dashboard');
				}

			}

		public function atualizar($projeto)
			{
				
			}

	}