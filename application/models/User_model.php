<?php

class User_model extends CI_Model{
    public function __construct()
    {
        $this->load->database(); 
        $this->load->helper('url'); 
    }

    public function get_all()
    {
        $query = $this->db->get("users"); 
        return $query->result();
    }

    public function store()
    {
        $data = [
            
            'name'  => $this->input->post('name'), 
            'mobile' => $this->input->post('mobile'),
            'address' => $this->input->post('address'),
            'email_address' => $this->input->post('email_address')
        ];

        $result = $this->db->insert('users', $data); 
        return $result; 
    }

    public function get_id($id){
        $query = $this->db->get_where('users', array('id' => $id)); 

        return $query->row(); 
    }

    public function update($id)
    {
        $data = [
            'name'  => $this->input->post('name'), 
            'mobile' => $this->input->post('mobile'),
            'address' => $this->input->post('address'),
            'email_address' => $this->input->post('email_address')
        ]; 

        $result = $this->db->where('id', $id)->update('users', $data);
        return $result; 
    }

    public function delete_user($id)
    {
        $this->db->where('id', $id); 
        return $this->db->delete('users');
    }


}