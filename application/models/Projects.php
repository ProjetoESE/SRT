<?php

	class Projects extends CI_Model
	{
		public function publicProjects()
			{
				$this->db->order_by('id', 'desc');
				return $this->db->get('projects')->result();
			}
		
		public function newProject($project)
			{

				if ($this->db->insert('projects', $project)) {
					redirect('sistema/dashboard');
				}
			}

		public function myProjects()
			{
				$this->db->where('user_id', $id = $this->session->get_userdata('user')['user']->id);

				$this->db->order_by('id', 'desc');

				return $this->db->get('projects')->result();
				
			}

		public function delete($project_id)
			{
				$this->db->where('id', $project_id);

				if ($this->db->delete('projects')) {
					redirect('sistema/dashboard');
				}

			}

		public function update($project)
			{
				
			}

	}