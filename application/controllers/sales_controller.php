<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();


    }
    //funciones
    #Home
     public function Home()
    {
        $this->load->view('header/header');
        $this->load->view('contenido/Menu');
        $this->load->view('home');
        $this->load->view('footer/footer');
    }

    public function DetallesPedido()
    {
        $this->load->view('header/header');
        $this->load->view('contenido/Menu');
        $this->load->view('contenido/usuario/DetallesPedidos');
        $this->load->view('footer/footer');

    }

    /** end Pedidos **/
       public function recibo()
    {
        $this->load->view('header/header');
        $this->load->view('contenido/Menu');
        $this->load->view('contenido/administrador/Recibo');
        $this->load->view('footer/footer');
    }
    /** observaciones **/
     public function Observaciones()
    {
        $this->load->view('header/header');
        $this->load->view('contenido/Menu');
        $this->load->view('contenido/usuario/observaciones');
        $this->load->view('footer/footer');
    }
}