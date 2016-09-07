<?php 
class Pedido_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	
	public function cargarPedidos()
    {
    $query=	$this->db->get('Pedido');
        if($query->num_rows() > 0){
        	return $query->result_array();
         }
      return 0;
    }
    public function cargarDetallesPedidos()
    {
    $query= $this->db->get('view_pedidos');
        if($query->num_rows() > 0){
            return $query->result_array();
         }
      return 0;
    }
    public function detallePedido($id)
    {
        $this->db->where('idPedido',$id);
        $query= $this->db->get('view_pedidos');
        if($query->num_rows() > 0){
            return $query->result_array();
         }
      return 0;
    }
    public function cabeceraPedido($id)
    {
        $this->db->where('idPedido',$id);
        $query=$this->db->get('pedido');
        if ($query->num_rows()>0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    public function UpdateEstado($estado,$idPedido)
    {
        $data = array('Estado' => $estado);
        $this->db->where('idPedido',$idPedido);
        $this->db->update('pedido',$data);
    }
}