<?php 
class Usuarios_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
      public function usuarios()
    {
    	$this->db->select('*');
        $this->db->from('usuario');
        $query = $this->db->get();        
        if($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        return 0;
    }
    public function TraerGrupos()
    {
        $this->db->where('Activa',0);
        $query= $this->db->get('gvendedor');
        if($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        return 0;   
    }
     public function EditUser($cod,$estado){
        switch ($estado) {
            case 0:$estado=1;break;
            default: $estado=0;break;}
        $data = array(
            'Activo' => $estado,
            'FechaBaja' =>date('Y-m-d H:i:s')
        );
        $this->db->where('UsuarioID', $cod);
        $this->db->update('usuario',$data);
    }
    public function guardarUsuario($nombre,$pass,$privilegio)
    {
        $data= array('NombreUsuario' => $nombre,'Password' => $pass, 'Privilegio' => $privilegio,'Activo' => '0', 'FechaCreacion' => date('Y-m-d H:m:i') );
        $this->db->insert('usuario', $data);
    }
    public function TraerJefes()
    {
        $this->db->where('Privilegio',2);
        $query = $this->db->get('usuario');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }
    public function EditPass($pass)
    {
        echo $this->session->userdata('id');
        $data= array('Password' => $pass);
        $this->db->where('UsuarioID', $this->session->userdata('id'));
        $this->db->update('usuario',$data);
        header('Location: ../index.php/salir');
    }
    public function guardarGrupo($nombreGrupo,$jefeGrupo)
    {
        $data = array('nombreGrupo' => $nombreGrupo,'IdUsuario' => $jefeGrupo,'Activa' => 0);
        $this->db->insert('gvendedor',$data);
    }
    public function getGrupos()
    {
        $query = $this->db->get('gvendedor');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }
}