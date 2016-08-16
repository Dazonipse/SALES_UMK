<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendario_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('calendario_model');
        $this->load->library('session');


    }
    public function calendario()
    {
        $data['ruta']=$this->calendario_model->rutas();
        $this->load->view('header/header');
        $this->load->view('contenido/Menu');
        $this->load->view('contenido/calendario/calendario',$data);
        $this->load->view('footer/footer');
    }
    public function CargarEventos($ruta)
    {
        $data['eventos']=$this->calendario_model->CargarEventos($ruta);
        echo json_encode($data['eventos']);
    }

}