<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes_controller extends CI_Controller 
{
	public function __construct()
    	{
        	parent::__construct();
            $this->load->model('reportes_model');
            $this->load->model('pedido_model');
            $this->load->library('MPDF/mpdf');
    	}
    public function index()
    {
    	$this->load->view('header/header');
        $this->load->view('contenido/Menu');
        $this->load->view('contenido/reportes/Report');
        $this->load->view('footer/footer');
    }
    public function ajaxReportes($tipoReporte,$ruta,$f1,$f2)
    {
        //echo $tipoReporte,$ruta,$f1,$f2;
        $this->reportes_model->ajaxReportes($tipoReporte,$ruta,$f1,$f2);
    }
    public function ajaxReportesDetalle($noPedido)
    {
         $this->reportes_model->ajaxReportesDetalle($noPedido);
    }
    public function ajaxPdfDetalle($pedido)
    {
        $data['detalles']=$this->pedido_model->detallePedido($pedido);
        //print_r($data['detalles']);
        $mPDF = new mPDF('utf-8','A4');
        $mPDF->SetFooter("Página {PAGENO} de {nb}");//PARA PONER EL NUMERO DE PAGINA EKISDE
        $mPDF->writeHTML($this->load->view('pdf/pdf_DetallePedido',$data,true));
        $mPDF->Output();
        /*$this->load->view('header/header');
        $this->load->view('contenido/Menu');
        $this->load->view('contenido/pedido/detallePedido',$data);
        $this->load->view('footer/footer');   */
    }
}?>