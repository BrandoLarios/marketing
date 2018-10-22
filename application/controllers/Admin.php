<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct(){
		parent:: __construct();
		$this->load->library('session');
		$this->load->model("AdminModel");
		$this->load->database();
		
    }
    public function index()  {
        $this->load->view('designer/home');
    }
    //Vista
    public function new () {
        $this->load->view('designer/home');
    }
    //Modelo
    public function add () {
        $user = array (
            "name"              => ucwords($this->input->post('name')),
            "lastname"          => ucwords($this->input->post('lastname')),
            "email"             => strtolower($this->input->post('email')),
            "CURP"              => strtoupper($this->input->post('CURP')),
            "phone"             => $this->input->post('phone'),
            "cellphone"         => $this->input->post('cellphone'),

            "state"             => ucwords($this->input->post('state')),
            "municipality"      => ucwords($this->input->post('municipality')),
            "colony"            => ucwords($this->input->post('colony')),
            "direction"         => ucwords($this->input->post('direction')),
            "cp"                => $this->input->post('cp'),

            "contract_date"     => $this->input->post('contract_date'),
            "RFC"               => strtoupper($this->input->post('RFC')),
            "inhour"            => $this->input->post('inhour'),
            "outhour"           => $this->input->post('outhour'),

            "password"          => strtoupper($this->input->post('CURP')),
            "deleted"           => '0'
        );
        $users = $this->AdminModel->getall();
        $count=0;
        foreach ($users as $usr):
            if( $usr->email == strtolower($this->input->post('email')) ){
                $count++;
            }
        endforeach;
        if($count==0){
            $this->AdminModel->add($user);
            $data['users']= $this->AdminModel->getallactives();
            $this->load->view('admin/users/list',$data);
        }else{
            $data['user'] = $user;
            $data['error'] = "El correo electronico ya esta registrado, ingrese otro diferente o modifique el correo del usuario que lo tiene asignado";
            $this->load->view('admin/users/new',$data);
        }
    }
    //Vista
    public function list () {
        $data['users']=$this->AdminModel->getall();
        $this->load->view('admin/users/list',$data);
    }
    //Vista 
    public function edit ($id = null) {
        if($id == null){
            redirect(base_url('index.php/admin/list'));
        }else{
            $data['user'] = $this->AdminModel->getuser($id);
            $this->load->view('admin/users/edit',$data);
        }
    }
    //Modelo
    public function modify ($id = null) {
        if($id == null){
            redirect(base_url('index.php/admin/list'));
        }else{
            $user = array (
                "name"              => strtoupper($this->input->post('name')),
                "lastname"          => strtoupper($this->input->post('lastname')),
                "email"             => strtolower($this->input->post('email')),
                "CURP"              => strtoupper($this->input->post('CURP')),
                "phone"             => $this->input->post('phone'),
                "cellphone"         => $this->input->post('cellphone'),
    
                "state"             => strtolower($this->input->post('state')),
                "municipality"      => strtolower($this->input->post('municipality')),
                "colony"            => strtolower($this->input->post('colony')),
                "direction"         => strtolower($this->input->post('direction')),
                "cp"                => $this->input->post('cp'),
    
                "contract_date"     => $this->input->post('contract_date'),
                "RFC"               => strtoupper($this->input->post('RFC')),
                "inhour"            => $this->input->post('inhour'),
                "outhour"           => $this->input->post('outhour'),
    
                "password"          => strtoupper($this->input->post('CURP')),
                "deleted"           => '0'
            );
            $users = $this->AdminModel->getall();
            $count=0;
            foreach ($users as $usr):
                if( $usr->email == strtolower($this->input->post('email')) ){
                    $count++;
                }
            endforeach;
            if($count==0){
                $this->AdminModel->modify($user,$id);
                $data['users']= $this->AdminModel->getall();
                $this->load->view('admin/users/list',$data);
            }else{
                $data['user'] = $this->AdminModel->getuser($id);
                $data['error'] = "El correo electronico ya esta registrado, ingrese otro diferente o modifique el correo del usuario que lo tiene asignado";
                $this->load->view('admin/users/edit',$data);
            }
        }
    }
}