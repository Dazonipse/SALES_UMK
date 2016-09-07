<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido_controller extends CI_Controller
{
	public function __construct()
    {
            parent::__construct();
            $this->load->model('pedido_model');
            $this->load->library('session');
    }

    public function Pedido()
   	{
   			$data['pedidos']=$this->pedido_model->cargarPedidos();
            $data['detalles'] = $this->pedido_model->cargarDetallesPedidos();
        	$this->load->view('header/header');
        	$this->load->view('contenido/Menu');
        	$this->load->view('contenido/pedido/pedido',$data);
        	$this->load->view('footer/footer');
    }
    public function detallePedido($id)
    {
        //$data['pedidos']=$this->pedido_model->cargarPedidos();
        $data['detalles']=$this->pedido_model->detallePedido($id);
        $this->load->view('header/header');
        $this->load->view('contenido/Menu');
        $this->load->view('contenido/pedido/detallePedido',$data);
        $this->load->view('footer/footer');   
    }
    public function cabeceraPedido()
    {
        $id=$this->input->post('name');
        $data['sc_get']=$this->pedido_model->cabeceraPedido($id);
        $sc=json_encode($data['sc_get']);
        echo $sc;
    }
   /* public function DetallePedido($id)    
    {
        $data=$this->pedido_model->detallePedido($id);
        $json = array();
        $i=0;
        foreach($data as $row){
            $json['data'][$i]['IdAarticulo'] = "<p class='negra' id='filasdetalle'>".$row['IdPedido']."</p>";
            $json['data'][$i]['Descripcion'] = "<p class='regular' id='filasresalto'>".$row['Descripcion']."</p>";
            $json['data'][$i]['Cantidad'] = "<p class='regular' id='filasdetalle'>".$row['Cantidad']."</p>";
            $json['data'][$i]['Precio'] = "<p class='regular' id='filasdetalle'>".$row['Precio']."</p>";
            $i++;
        }
        echo json_encode($json); 
    }*/

    public function UpdateEstado($estado,$idPedido)
    {
        $this->pedido_model->UpdateEstado($estado,$idPedido);
        $this->Pedido();
    }
}