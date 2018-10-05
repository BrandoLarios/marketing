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
        $this->load->view('admin/users/new');
    }

    public function newuser () {
        $this->load->view('admin/users/new');
    }

    public function adduser () {
        $user = array (
            "name"              => $this->input->post('name'),
            "lastname"          => $this->input->post('lastname'),
            "email"             => $this->input->post('email'),
            "state"             => $this->input->post('state'),
            "municipality"      => $this->input->post('municipality'),
            "cp"                => $this->input->post('cp'),
            "direction"         => $this->input->post('direction'),
            "phone"             => $this->input->post('phone'),
            "cellphone"         => $this->input->post('cellphone'),
            "borndate"          => $this->input->post('borndate'),
            "contract_date"     => $this->input->post('contract_date'),
            "name"              => $this->input->post('name'),
        );
    }
    
}