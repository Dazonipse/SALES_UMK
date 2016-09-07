<?php 
class Reportes_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function ajaxReportes($tipoReporte,$ruta,$f1,$f2)
    {
        $json = array();
        $i=0;
        switch ($tipoReporte) {
            case '1':
            $Array = $this->db->get('view_reportePedidos');
            foreach( $Array->result_array() as $row){
                $json['data'][$i]["opcion"] = '<i class="detalle material-icons">expand_more</i>';
                $json['data'][$i]["hola"] = $row['IdVendedor'];
                $json['data'][$i]["hola2"] = '<a class="negra" href="ajaxPdfPedido/'.$row["IdPedido"].'">'.$row['IdPedido'].'</a>';
                $json['data'][$i]["hola3"] = $row['IdCliente'];
                $json['data'][$i]["hola4"] = $row['Cliente'];
                $json['data'][$i]["hola5"] = number_format($row['Monto'],2);
                $i++;
            }
                $json['columns'][0]['data'] = "opcion";
                $json['columns'][0]['name'] = "DETALLE";
                $json['columns'][1]['data'] = "hola";
                $json['columns'][1]['name'] = "VENDEDOR";
                $json['columns'][2]['data'] = "hola2";
                $json['columns'][2]['name'] = "# PEDIDO";
                $json['columns'][3]['data'] = "hola3";
                $json['columns'][3]['name'] = "# CLIENTE";
                $json['columns'][4]['data'] = "hola4";
                $json['columns'][4]['name'] = "CLIENTE";
                $json['columns'][5]['data'] = "hola5";
                $json['columns'][5]['name'] = "MONTO";
                $i++;
            echo json_encode($json);         
            break;
            case '1':
                # code...
                break;
            default:
                # code...
                break;
        }   		
    }
    public function ajaxReportesDetalle($noPedido)
    {
       $json = array();
        $i=0;
        $this->db->where('IdPedido',$noPedido);
        $Array = $this->db->get('pdetalle');
       foreach( $Array->result_array() as $row){
                $json['data'][$i]["hola"] = $row['IdDP'];
                $json['data'][$i]["hola2"] = $row['IdPedido'];
                $json['data'][$i]["hola3"] = $row['IdArticulo'];
                $json['data'][$i]["hola4"] = $row['Descripcion'];
                $json['data'][$i]["hola5"] = $row['Cantidad'];
                $json['data'][$i]["hola6"] = $row['Precio'];
                $i++;
            }
            echo json_encode($json);    
    }
}
?>