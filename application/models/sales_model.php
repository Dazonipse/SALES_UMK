<?php 
class Sales_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function usuarios()
    {

    	$this->db->select('*');
        $this->db->from('usuarios');

         $query = $this->db->get();

        
        if($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        return 0;
    }


//Fin del modelo
}