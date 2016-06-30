<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();


    }
    public function Facturas()
    {
        $this->load->view('header/header');
        $this->load->view('contenido/Menu');
        $this->load->view('contenido/administrador/facturas');
        $this->load->view('footer/footer');
    }

    public function Pedido()
    {
        $this->load->view('header/header');
        $this->load->view('contenido/Menu');
        $this->load->view('contenido/usuario/pedido');
        $this->load->view('footer/footer');
    }
    public function Ruta()
    {
        $this->load->view('header/header');
        $this->load->view('contenido/Menu');
        $this->load->view('contenido/administrador/rutas');
        $this->load->view('footer/footer');
    }

    public function Users()
    {
        $this->load->view('header/header');
        $this->load->view('contenido/Menu');
        $this->load->view('contenido/administrador/GruposUsuarios');
        $this->load->view('footer/footer');
    }

}