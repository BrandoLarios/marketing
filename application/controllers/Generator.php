<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Generator extends CI_Controller {
    
    public function index()  {
        $this->load->view('generador/index');
    }
    //Vista
    public function TareasP () {
        $this->load->view('generador/G_TareasP');
    }
    public function H_Tareas () {
        $this->load->view('generador/G_H_Tareas');
    }
    public function Publicacion () {
        $this->load->view('generador/G_Publicacion');
    }

    public function Campana () {
        $this->load->view('generador/G_Campana');

    }
    public function Empresa  () {
        $this->load->view('generador/G_Empresa');
    }
}
