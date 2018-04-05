<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

    class Register extends CI_Controller
        {

            public function addUser()
                {
                    $user['name'] = $this->input->post('name');
                    $user['email'] = $this->input->post('email');
                    $user['password'] = $this->input->post('password');
                    $user['institution'] = $this->input->post('institution');
                    $user['lattes_address'] = $this->input->post('lattes_address');
                    $user['role'] = $this->input->post('role');

                    $this->load->model('user_register');

                    $this->user_register->insert_user($user);
                }

                  public function show_Edit_User($id=null)
                {
                    //$this->db->select('*');
                    $datauser['user'] = $this->db->get_where('user', array('user_id' => $this->session->userdata('user_id') ))->result();
                    $this->db->where('user_id', $id);
                    

                    $this->load->view('frame/header_view');
                    $this->load->view('frame/sidebar_nav_view');
                    $this->load->view('edit_user', $datauser);
                }

                 public function updateUser($id=null){

                $this->db->where('user_id', $id);
                $datauser['user'] = $this->db->get('user')->result();

                $this->load->view('frame/header_view');
                $this->load->view('frame/sidebar_nav_view');
                $this->load->view('edit_user', $datauser);
                }

                 public function saveUpdateUser(){
                    //$this->ajax_checking();

                $postData = $this->input->post();

                $this->db->where('user_id', $postData['user_id']);

                if($this->db->update('user', $postData)){
                    $this->session->set_flashdata('success', 'User '.$postData['name'].' has been updated created!');
                }
                redirect('register/show_Edit_User');         
            }
        }