<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){//Cargamos el modelo 
	parent::__construct();
	$this->load->model('M_Marketing');

}

private function valida_session(){
	if(empty($this->session->userdata('usuario'))){
		redirect(base_url());
	}
}


public function index(){
	$user = $this->input->post('user');
	$pswd = $this->input->post('pswd');
	if($user!=0 | $pswd != 0){
		redirect('prueba1');
	}
	$this->load->view('LogIn');
}

	function valida(){

	//recibimos por POST el nombre de ususario y su clave
	$user = $this->input->post('user');
	$pswd = $this->input->post('pswd');

	//invocamos el metodo getUsuario del modelo M_Marketing
	$res = $this ->M_Marketing->getUsuario($user,$pswd); 
	$usuario=$res['Usuario'];
	$this->session->set_userdata('usuario',$usuario);
	if(empty($res)){
		redirect(base_url());
	}else{
		//se obtiene en rol 
		$rol=$res['Rol'];
		$nombre=$res['Nombre'];
		switch($rol){
			case 1:
				$this->load->view('Admin/index');
			break;
			case 2:
				$this->load->view('Designer');
				$this->CM_Campanas($nombre);
			break;
			case 3:
				$this->load->view('Generator');
			break;

		}
		//registrar usuario en una viable de SESION
		//$this->session->set_userdata('usuario',$user);
		//$this->load->view('prueba1');
	}
	
	}
}
	