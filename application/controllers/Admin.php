<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct(){
		parent:: __construct();
		$this->load->library('session');
		$this->load->model("AdminModel");
		$this->load->database();
		
	}
    //Vista
    public function new () {
        $this->load->view('admin/users/new');
    }
    //Modelo
    public function add () {
        $users = $this->AdminModel->getall();
        $count=0;
        foreach ($users as $user):
            if($user->email == $this->input->post('email')){
                $count++;
            }
        endforeach;
        if($count==0){
            $user = array (
                "name"              => $this->input->post('name'),
                "lastname"          => $this->input->post('lastname'),
                "email"             => $this->input->post('email'),
                "CURP"              => $this->input->post('CURP'),
                "phone"             => $this->input->post('phone'),
                "cellphone"         => $this->input->post('cellphone'),

                "state"             => $this->input->post('state'),
                "municipality"      => $this->input->post('municipality'),
                "colony"            => $this->input->post('colony'),
                "direction"         => $this->input->post('direction'),
                "cp"                => $this->input->post('cp'),

                "contract_date"     => $this->input->post('contract_date'),
                "RFC"               => $this->input->post('RFC'),
                "inhour"            => $this->input->post('inhour'),
                "outhour"           => $this->input->post('outhour'),

                "password"          => $this->input->post('CURP'),
                "deleted"           => '0'
            );
            $this->AdminModel->add($user);
            $data['users']= $this->AdminModel->getall();
            $this->load->view('admin/users/list',$data);
        }else{
            $data['users'] = $user;
            $data['error'] = "El correo electronico ya esta registrado, ingrese otro diferente o modifique el correo del usuario que lo tiene asignado";
            $this->load->view('admin/users/new',$data);
        }
    }
    //Vista
    public function list (){
        $data['users']=$this->AdminModel->getall();
        $this->load->view('admin/users/list',$data);
    }
    //Vista 
    public function edit ($id = null){
        if($id == null){
            redirect(base_url('index.php/admin/list'));
        }else{
            $data['user'] = $this->AdminModel->getuser($id);
            $this->load->view('admin/users/edit',$data);
        }
    }
    //Modelo
    public function modify($id = null){
        if($id == null){
            redirect(base_url('index.php/admin/list'));
        }else{
            $users = $this->AdminModel->getall();
            $count=0;
            foreach ($users as $user):
                if($user->email == $this->input->post('email')){
                    $count++;
                }
            endforeach;
            if($count==0){
                $user = array (
                    "name"              => $this->input->post('name'),
                    "lastname"          => $this->input->post('lastname'),
                    "email"             => $this->input->post('email'),
                    "CURP"              => $this->input->post('CURP'),
                    "phone"             => $this->input->post('phone'),
                    "cellphone"         => $this->input->post('cellphone'),

                    "state"             => $this->input->post('state'),
                    "municipality"      => $this->input->post('municipality'),
                    "colony"            => $this->input->post('colony'),
                    "direction"         => $this->input->post('direction'),
                    "cp"                => $this->input->post('cp'),

                    "contract_date"     => $this->input->post('contract_date'),
                    "RFC"               => $this->input->post('RFC'),
                    "inhour"            => $this->input->post('inhour'),
                    "outhour"           => $this->input->post('outhour'),

                    "password"          => $this->input->post('CURP'),
                    "deleted"           => '0'
                );
                $this->AdminModel->add($user);
                $data['users']= $this->AdminModel->getall();
                $this->load->view('admin/users/list',$data);
            }else{
                $data['users'] = $user;
                $data['error'] = "El correo electronico ya esta registrado, ingrese otro diferente o modifique el correo del usuario que lo tiene asignado";
                $this->load->view('admin/users/edit',$data);
            }
        }
    }
}