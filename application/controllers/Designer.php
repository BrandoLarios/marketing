<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designer extends CI_Controller {
    public function index()  {
        $this->load->view('designer/index');
    }
    //Vista
    public function TareasP () {
        $this->load->view('designer/TareasP');
    }
    public function H_Tareas () {
        $this->load->view('designer/H_Tareas');
    }
    public function Publicacion () {
        $this->load->view('designer/Publicacion');
    }

    public function Campana () {
        $this->load->view('designer/Campana');

    }
    public function Empresa  () {
        $this->load->view('designer/Empresa');
    }
}
