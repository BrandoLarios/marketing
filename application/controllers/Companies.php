<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Companies extends CI_Controller {
    function __construct(){
		parent:: __construct();
		$this->load->library('session');
		$this->load->database();
		
    }

    public function index ()  {
        $this->load->view('admin/companies/new');
    }

    public function new () {
        $this->load->view('admin/companies/new');
    }

    public function add () {
        $user = array (
            "name"              => ucfirst(strtolower(($this->input->post('name')))),
            "social"            => ucfirst(strtolower(($this->input->post('social')))),

            "email"             => strtolower($this->input->post('email')),
            "phone"             => $this->input->post('phone'),
            "cellphone"         => $this->input->post('cellphone'),
            "state"             => ucfirst(strtolower(($this->input->post('state')))),
            "municipality"      => ucfirst(strtolower(($this->input->post('municipality')))),
            "colony"            => ucfirst(strtolower(($this->input->post('colony')))),
            "direction"         => ucfirst(strtolower(($this->input->post('direction')))),
            "cp"                => $this->input->post('cp'),

            "status"           => '1'
        );
        
    }
}