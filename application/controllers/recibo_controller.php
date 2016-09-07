<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recibo_controller extends CI_Controller 
{

	public function __construct()
        {
            parent::__construct();
            $this->load->model('recibo_model');
            $this->load->library('session');
        }

    public function index()
    {
        $data['recibos']=$this->recibo_model->cargarCobros();
        $this->load->view('header/header');
        $this->load->view('contenido/Menu');
        $this->load->view('contenido/recibo/cobros',$data);
        $this->load->view('footer/footer');
    }
    public function obtenerDetalle($id)
    {
    	$data= $this->recibo_model->getDetalle($id);

        $json = array();
        $i=0;
        foreach($data as $row){
            $json['data'][$i]['NFactura'] = "<p class='negra' id='filasdetalle'>".$row['NFactura']."</p>";
            $json['data'][$i]['FValor'] = "<p class='regular' id='filasresalto'>".$row['FValor']."</p>";
            $json['data'][$i]['Descuento'] = "<p class='regular' id='filasdetalle'>".$row['Descuento']."</p>";
            $json['data'][$i]['VRecibo'] = "<p class='regular' id='filasdetalle'>".$row['VRecibo']."</p>";
            $i++;
        }
        echo json_encode($json); 
    }
     public function obtenerDetalle2()
    {
        $cat=$this->input->post('name');
        $data['sc_get']=$this->recibo_model->getDetalle2($cat);
        $sc=json_encode($data['sc_get']);
        echo $sc;
    }

}