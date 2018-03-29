<?php 

	class System extends CI_Controller
		{

			public function __construct()
			{
				parent::__construct();
				$this->load->model('Projects');
			}

			public function index(){
				if (!$this->session->userdata('user')) {
					$this->load->view('inicio/login');
				}else{
					redirect('sistema/dashboard');
				}
				
			}


			public function dashboard()
				{
						if (!$this->session->userdata('user'))
						redirect('index.php');

					$data['projects'] = $this->projects->publicProjects();

					$projects = array();

					$this->load->model('Participants');

					foreach ($data['projects'] as $project) {

						$participants = $this->Participants->allParticipants($project->id);

						$current_project = array(
							'project' => $project,
							'participants' => $participants
						);

						array_push($projects, $current_project);
						 
					}

					$data['projects'] = $projects;
  

					$data['title'] = 'Dashboard';

					$this->load->view('sistema/inc/header', $data);
					$this->load->view('sistema/dashboard', $data);
					$this->load->view('sistema/inc/footer');
					
				}

			public function myProjects()
				{
					if (!$this->session->userdata('user'))
						redirect('index.php');


					$data['title'] = 'My Projects';
					$this->load->view('sistema/inc/header', $data);

					$data['myprojects'] = $this->projects->myProjects();

					$projects = array();

					$this->load->model('Participants');

					foreach ($data['myprojects'] as $project) {

						$participants = $this->Participants->allParticipants($project->id);

						$current_project = array(
							'project' => $project,
							'participants' => $participants
						);

						array_push($projects, $current_project);
						 
					}

					$data['myprojects'] = $projects;
					
					$this->load->view('sistema/myprojects', $data);

					$this->load->view('sistema/inc/footer');

				}

			public function detail($id)
				{
					echo "string";
				}

			public function newProject()
				{
					if (!$this->session->userdata('user'))
					redirect('index.php');


					$data['title'] = "New project";
					$this->load->view('sistema/inc/header', $data);
					$this->load->view('sistema/newproject');
					$this->load->view('sistema/inc/footer');
					
				}

			public function saveProject()
				{
					if (!$this->session->userdata('user'))
						redirect('index.php');

					$project['title'] = $this->input->post('title');
					$project['description'] = $this->input->post('description');
					$project['user_id'] = $this->session->get_userdata('user')['user']->id;
					$project['creator'] = $this->session->get_userdata('user')['user']->name;


					$this->projects->newProject($project);
				}

			public function logout()
				{
					$this->session->sess_destroy();
					redirect();
				}

			public function delete($id)
				{
					$this->projects->delete($id);
				}

			public function myProfile()
				{
					$data['user'] = $this->session->get_userdata('user')['user'];

					$data['title'] = 'Profile | ' . $this->session->get_userdata('user')['user']->name;

					$this->load->view('sistema/inc/header', $data);
					$this->load->view('sistema/myprofile', $data);
					$this->load->view('sistema/inc/footer');
				}

			public function updateProfile()
					{
						$user['name'] = $this->input->post('name');
						$user['lastname'] = $this->input->post('lastname');
						$user['email'] = $this->input->post('email');
						$user['profession'] = $this->input->post('profession');
						$user['id'] = $this->session->get_userdata('user')['user']->id;

						$this->load->model('Users');

						$this->users->updateProfile($user);
					}

			public function unconfirmedEmail()
				{
					$this->load->view('alertas/unconfirmed_email');
				}

			public function searchEmail()
				{
					$this->load->model('Users');
					$email = $this->input->post('email');

					$status = array(
						'status' => $this->users->searchEmail($email)
					);

					echo json_encode($status);
				}

				public function invite()
					{
						$project_id = $this->input->post('project_id');
						$email = $this->input->post('email_member');

						$this->load->model('Users');
						$this->load->model('Participants');
						$this->load->model('Users');

						if ($this->users->searchEmail($email)) {
							$user = $this->users->userInfo($email);

							$dados = array(
								'project_id' => $project_id,
								'user_id' => $user->id,
								'status' => 'asas',
								'permission' => 'as',
								'name' => $user->name
							);
							$this->Participants->addParticipants($dados);
						}else{
							$data['title'] = 'Invite';
							$data['email'] = $email;
							$this->load->view('sistema/inc/header', $data);
							$this->load->view('sistema/convidar_user', $data);
							$this->load->view('sistema/inc/footer');
						}
					}
			public function inviteUser()
				{
					
					$this::sendEmail('', '', $this->input->post('email'));
					$msg = array(
						'type' => 'success',
						'text' => '<strong>' . $this->input->post('email') . '</strong> Recieved an invite to sign up.'
					);

					$this->session->set_flashdata('info', $msg);

					redirect('sistema/dashboard');
				}

		private function sendEmail($message, $subject, $to)
		{

			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'ssl://smtp.googlemail.com';
			$config['smtp_port'] = '465';
			$config['smtp_timeout'] = '30';
			$config['smtp_user'] = 'projectphp123@gmail.com';
			$config['smtp_pass'] = 'Projeto123@';
			$config['charset'] = 'utf-8';
			$config['newline'] = '\r\n';
			$config['mailtype'] = 'html';

			$this->load->library('email', $config);

			$this->email->from('projectphp123@gmail.com', $subject);
			$this->email->to($to);
			$this->email->subject($subject);
			$this->email->message($message);

			return $this->email->send();

		}

		}