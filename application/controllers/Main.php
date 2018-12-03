<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    function __construct(){
		parent:: __construct();
        $this->load->library('session');
        $this->load->model("LoginModel");
		$this->load->database();
		
    }

    public function index () {
        $this->load->view('index');
    }

    public function login () {
        $user = array (
            "username"      => strtolower(($this->input->post('username'))),
            "password"      => strtolower(($this->input->post('password'))),
            "role"          => $this->input->post('role')
        );
        $users = $this->LoginModel->getall();
        $count=0;
        foreach ($users as $usr):
            if( $usr->username == $user['username']){
                $count++;
            }
        endforeach;
        if($count == 1){
            $usr = $this->LoginModel->getid($user['username']);
            if($usr->password == $user['password']){
                $roles = $this->LoginModel->getroles($usr->id);
                $count=0;
                foreach($roles as $role):
                    if($role == $user['role']){
                        $count++;
                    }
                endforeach;
                if($count == 1){
                    if($user['role'] == "root"){
                        $this->session->set_userdata($user);
                        $this->load->view('root/index');
                    }
                }else{
                    $data['error'] = "El usuario no tiene permisos en ese rol";
                    $this->load->view('index',$data);
                }
            }else{
                $data['error'] = "Contraseña incorrecta";
                $this->load->view('index',$data);
            }
        }else{
            $data['error'] = "El nombre de usuario no se encuentra registrado";
            $this->load->view('index',$data);
        }
    }

    
}