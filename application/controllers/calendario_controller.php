<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendario_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('session');


    }

    public function calendario()
    {
        $this->load->view('header/header');
        $this->load->view('contenido/Menu');
        $this->load->view('contenido/usuario/calendario');
        $this->load->view('footer/footer');
    }

}