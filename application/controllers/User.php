<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller { 
    public function __construct() {
        parent::__construct(); 
        $this->load->model('User_model', 'user');
    }

    public function index(){
        $data['users'] = $this->user->get_all(); 
        $this->load->view('layout/header'); 
        $this->load->view('user/index', $data); 
        $this->load->view('layout/footer');

    }

    public function create(){
        $this->load->view('layout/header');
        $this->load->view('user/create'); 
        $this->load->view('layout/footer');
    }

    public function store(){
        $this->user->store();
        redirect(base_url('user'));
    }

    public function edit($id){
        $data['users'] = $this->user->get_id($id);
        $this->load->view('layout/header');
        $this->load->view('user/edit', $data);
        $this->load->view('layout/footer'); 
    }

    public function update($id)
    {
        $this->user->update($id); 
        redirect(base_url('user'));
    }
    
    public function delete($id)
    {
        $item = $this->user->delete_user($id); 
        redirect(base_url('user')); 
    }

}