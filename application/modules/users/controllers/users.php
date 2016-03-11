<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Users extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->template->set_layout('caritor');
        $this->template->set_partial('header','partials/caritor/header');
        $this->template->set_partial('footer','partials/caritor/footer');
        $this->load->model('user_model','users');
    }
    
    public function index(){
        //$this->load->view('users/list');
        $this->template->build('users/list');
    }
    public function add(){
        $data = $this->input->post();
        if($data){
            $this->users->insert($data);
        }
         $this->template->build('users/add');
        
    }
    
}