<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designer extends CI_Controller {
    function __construct(){
		parent:: __construct();
		$this->load->library('session');
		$this->load->model("AdminModel");
		$this->load->database();
		
    }

public function home()  {
    $this->load->view('designer/home');
}
public function TareasP () {
    $this->load->view('designer/TareasP');
}
}


