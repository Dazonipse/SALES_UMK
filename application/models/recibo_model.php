<?php 
class recibo_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function cargarCobros()
    {
    $query=	$this->db->get('recibo');
        if($query->num_rows() > 0){
        	return $query->result_array();
         }
      return 0;
    }

    public function getDetalle($id)
    {
    	$this->db->where('IdRecibo',$id);
    	$query=$this->db->get('rdetalle');
        if ($query->num_rows()>0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
      public function getDetalle2($id)
    {
        $this->db->where('IdRecibo',$id);
        $query=$this->db->get('recibo');
        if ($query->num_rows()>0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

}