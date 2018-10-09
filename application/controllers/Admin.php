<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct(){
		parent:: __construct();
		$this->load->library('session');
		$this->load->model("AdminModel");
		$this->load->database();
		
	}
    

    public function index () {
        $this->load->view('admin/index');
    }

    public function newuser () {
        $this->load->view('admin/users/new');
    }

    public function adduser () {
        $user = array (
            "name"              => $this->input->post('name'),
            "lastname"          => $this->input->post('lastname'),
            "email"             => $this->input->post('email'),
            "username"          => $this->input->post('name').$this->input->post('lastname'),
            "password"          => 'admindev',
            "contract_date"     => $this->input->post('contract_date'), 
            "register_date"     => getdate(),
            "state"             => $this->input->post('state'),
            "municipality"      => $this->input->post('municipality'),
            "direction"         => $this->input->post('direction'),
            "cp"                => $this->input->post('cp'),
            "phone"             => $this->input->post('phone'),
            "cellphone"         => $this->input->post('cellphone'),
            //"image"             => $this->input->post('image'),
            "CURP"              => $this->input->post('CURP'),
            "RFC"              => $this->input->post('RFC'),
            "deleted"           => '0'
        );
        $this->AdminModel->adduser($user);
        $this->load->view('admin/users/new');
    }
    
}