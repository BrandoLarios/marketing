<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    function __construct(){
		parent:: __construct();
		$this->load->library('session');
		$this->load->model("UsersModel");
		$this->load->database();
		
    }

    public function index()  {
        $this->load->view('admin/users/new');
    }
    //Vista
    public function new () {
        $this->load->view('admin/users/new');
    }
    //Modelo
    public function add () {
        $user = array (
            "name"              => ucfirst(strtolower(($this->input->post('name')))),
            "lastname"          => ucfirst(strtolower(($this->input->post('lastname')))),
            "email"             => strtolower($this->input->post('email')),
            "CURP"              => strtoupper($this->input->post('CURP')),
            "phone"             => $this->input->post('phone'),
            "cellphone"         => $this->input->post('cellphone'),

            "state"             => ucfirst(strtolower(($this->input->post('state')))),
            "municipality"      => ucfirst(strtolower(($this->input->post('municipality')))),
            "colony"            => ucfirst(strtolower(($this->input->post('colony')))),
            "direction"         => ucfirst(strtolower(($this->input->post('direction')))),
            "cp"                => $this->input->post('cp'),

            "contract_date"     => $this->input->post('contract_date'),
            "RFC"               => strtoupper($this->input->post('RFC')),
            "inhour"            => $this->input->post('inhour'),
            "outhour"           => $this->input->post('outhour'),

            "password"          => strtoupper($this->input->post('CURP')),
            "deleted"           => '0'
        );
        $users = $this->UsersModel->getall();
        $count=0;
        foreach ($users as $usr):
            if( $usr->email == strtolower($this->input->post('email')) ){
                $count++;
            }
        endforeach;
        if($count==0){
            $this->UsersModel->add($user);
            $data['users']= $this->UsersModel->getallactives();
            $this->load->view('admin/users/list',$data);
        }else{
            $data['user'] = $user;
            $data['error'] = "El correo electronico ya esta registrado, ingrese otro diferente o modifique el correo del usuario que lo tiene asignado";
            $this->load->view('admin/users/new',$data);
        }
    }
    //Vista
    public function list () {
        $data['users']=$this->UsersModel->getall();
        $this->load->view('admin/users/list',$data);
    }
    //Vista 
    public function edit ($id = null) {
        if($id == null ){
            redirect(base_url('index.php/admin/list'));
        }else{
            $data['user'] = $this->UsersModel->getuser($id);
            $this->load->view('admin/users/edit',$data);
        }
    }
    //Modelo
    public function modify ($id = null) {
        if($id == null){
            redirect(base_url('index.php/users/list'));
        }else{
            //Obtener todos los usuarios registrados
            $users ['users'] = $this->UsersModel->getall();
            //Obtener la informacion del usuario a modificar
            $oneuser = $this->UsersModel->getuser($id);
            //Datos post de la vista
            $user = array (
                "name"              => ucfirst(strtolower(($this->input->post('name')))),
                "lastname"          => ucfirst(strtolower(($this->input->post('lastname')))),
                "email"             => strtolower($this->input->post('email')),
                "CURP"              => strtoupper($this->input->post('CURP')),
                "phone"             => $this->input->post('phone'),
                "cellphone"         => $this->input->post('cellphone'),

                "state"             => ucfirst(strtolower(($this->input->post('state')))),
                "municipality"      => ucfirst(strtolower(($this->input->post('municipality')))),
                "colony"            => ucfirst(strtolower(($this->input->post('colony')))),
                "direction"         => ucfirst(strtolower(($this->input->post('direction')))),
                "cp"                => $this->input->post('cp'),
    
                "contract_date"     => $this->input->post('contract_date'),
                "RFC"               => strtoupper($this->input->post('RFC')),
                "inhour"            => $this->input->post('inhour'),
                "outhour"           => $this->input->post('outhour'),
    
                "password"          => strtoupper($this->input->post('CURP')),
                "deleted"           => '0'
            );
            //Compara si hay modificacion en el correo
            if($oneuser->email == strtolower($this->input->post('email')) ){
                //Modifica los datos del usuario
                $this->UsersModel->modify($user,$id);
                $data['users']= $this->UsersModel->getall();
                $this->load->view('admin/users/list',$data);
            }else{
                $count=0;
                foreach ($users as $usr):
                    if( $usr->email == strtolower($this->input->post('email')) ){
                        $count++;
                    }
                endforeach;
                //Compara para saber si el correo ya esta registrado
                if($count==0){
                    $this->UsersModel->modify($user,$id);
                    $data['users']= $this->UsersModel->getall();
                    $this->load->view('admin/users/list',$data);
                }else{
                    $data['user'] = $this->UsersModel->getuser($id);
                    $data['error'] = "El correo electronico ya esta registrado, ingrese otro diferente o modifique el correo del usuario que lo tiene asignado";
                    $this->load->view('admin/users/edit',$data);
                }
            }
            
            
            
        }
    }

    public function delete ($id = null) {
        if($id == null){
            redirect(base_url('index.php/admin/list'));
        }else{
            $data['user'] = $this->UsersModel->getuser($id);
            $this->load->view('admin/users/delete',$data);
        }
    }
}