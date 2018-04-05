<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Project extends CI_Controller {

    function index() {
        $this->db->select('*');
        $dataproject['project'] = $this->db->get('project')->result();
        $this->load->view('project/my_projects', $dataproject);

        $this->load->model('myproject_model');
        $data['project'] = $this->myproject_model->showproject();

        $this->load->view('project', $data);


        
    }

    public function __Construct() {
        parent::__Construct();
        if(!$this->session->userdata('logged_in')) {
            redirect(base_url());
        }

        $this->load->model('project_model');
    }

    private function ajax_checking(){
        if (!$this->input->is_ajax_request()) {
            redirect(base_url());
        }
    }

    public function project_form(){

        $data = array(
            'formTitle' => 'New Project',
            'title' => 'New Project'
        );

        $this->load->view('frame/header_view');
        $this->load->view('frame/sidebar_nav_view');
        $this->load->view('project/new_project', $data);

    }


    function add_project(){
            //$this->ajax_checking();

        $postData = $this->input->post();
        $insert = $this->project_model->insert_project($postData);
        if($insert['status'] == 'success'){
            $this->session->set_flashdata('success', 'Project '.$postData['title'].' has been successfully created!');
        }
        redirect('project/show_projects');
        echo json_encode($insert);            
    }


    public function show_projects(){

            //$this->db->select('*');
        $dataproject['project'] = $this->db->get_where('project', array('created_by' => $this->session->userdata('user_id') ))->result();

        $this->load->view('frame/header_view');
        $this->load->view('frame/sidebar_nav_view');
        $this->load->view('project/my_projects', $dataproject);

    }

        //<!-- Begin Delete method --> 
    public function delete($id=null){

        $this->db->where('project_id', $id);
        if($this->db->delete('project')) {
            redirect('');
        } else {
            redirect('');
        }
    }
            //<!-- End Delete method --> 


            //<!-- Begin Update method --> 
    public function update($id=null){

        $this->db->where('project_id', $id);
        $dataproject['project'] = $this->db->get('project')->result();

        $this->load->view('frame/header_view');
        $this->load->view('frame/sidebar_nav_view');
        $this->load->view('project/edit_project', $dataproject);


    }
            //<!-- End Update method --> 

    public function saveUpdate(){
            //$this->ajax_checking();

        $postData = $this->input->post();

        $this->db->where('project_id', $postData['project_id']);

        if($this->db->update('project', $postData)){
            $this->session->set_flashdata('success', 'Project '.$postData['title'].' has been updated created!');
        }
        redirect('project/show_projects');
        //echo json_encode($insert);            
    }

    public function add_researcher_page($id=null){
        $this->db->where('project_id', $id);
        $dataproject['project'] = $this->db->get('project')->result();

        $this->load->view('frame/header_view');
        $this->load->view('frame/sidebar_nav_view');
        $this->load->view('project/add_researcher', $dataproject);
    }

    public function add_researcher(){
        $postData = $this->input->post();

        $this->db->where('email', $postData['email']);
        $userdata = $this->db->get('user');
        foreach ($userdata->result() as $row)
        {
            $id = $row->user_id;
            $name = $row->name;
        }

        if($id==null){
            $this->session->set_flashdata('error', 'This e-mail doesn`t exist in our database!');
            redirect('project/add_researcher_page/'.$postData['project_id']);
        }

        $project_has_user = array(
            'project_id' => $postData['project_id'],
            'user_id' => $id,
            'access_level' => $postData['access_level']
        );

        $result = $this->db->insert('project_has_user', $project_has_user);

        if($result){
            $this->session->set_flashdata('success', 'Researcher '.$name.' has been added to the project!');
        }
        redirect('project/add_researcher_page/'.$postData['project_id']);
    }

    public function show_project_page($id=null){
        $this->db->where('project_id', $id);
        $dataproject['project'] = $this->db->get('project')->result();

        $this->load->view('frame/header_view');
        $this->load->view('frame/sidebar_nav_view');
        $this->load->view('project/project_page', $dataproject);
    }
}
?>