<?php

	class Participants extends CI_Model
	{
		
		public function allParticipants($project_id)
			{
				$this->db->where('project_id', $project_id);

				return $this->db->get('participants')->result();
			}

		public function addParticipants($data)
			{
				if ($this->db->insert('participants', $data)) {
					redirect();
				}
			}
	}