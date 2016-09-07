<?php 
class Calendario_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function rutas()
    {
        $this->db->distinct('CodVendedor');
        $this->db->where('Privilegio',0);
        $this->db->SELECT('UsuarioID,CodVendedor');
        $query=$this->db->get('usuario');
        if($query->num_rows() > 0){
            return $query->result_array();
        }
        return 0;
    }
    public function CargarEventos($id)
    {   
        $this->db->where('Ruta',$id);
    	$query=$this->db->get('View_Eventos');
    	$json = array();
    	$i=0;
        $segundo=0;
    	$array = array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
    	for ($D=0; $D <count($array) ; $D++) {
    		
    		if($query->num_rows() > 0){
    		foreach ($query->result_array() as $key ) {							
    		    $porciones = explode(",", $key[$array[$D]]);
    			for ($n=0; $n <count($porciones); $n++) { 
                    $Array = $this->sqlsrv->fetchArray("SELECT NOMBRE FROM dbo.MASTER_CLIENTES_VIEW WHERE CLIENTE ='".$porciones[$n]."'",SQLSRV_FETCH_ASSOC);

                    if (count($Array)>0) {
                        $visitado = $this->verificarVisitado($porciones[$n],$key['IdPlan']);
                        $fecha=strtotime ('+'.$segundo.' second',strtotime($this->generarDate($array[$D])));
                        $fecha = date ( 'Y-m-d H:m:s' , $fecha );
                        ++$segundo;
                        $json['Analisis'][$i]['title'] =  $Array[0]['NOMBRE'];
                        $json['Analisis'][$i]['id'] = $key['IdPlan'];
                        $json['Analisis'][$i]['cliente'] = $porciones[$n];
                        $json['Analisis'][$i]['dia'] =  $array[$D];
                        $json['Analisis'][$i]['start'] = $fecha;
                        $json['Analisis'][$i]['end'] =  $fecha;
                        /*0 aun no visitado
                        1 visitado exitosamente
                        2 no visitado por problemas*/
                        if ($visitado=="0") {$json['Analisis'][$i]['color'] =  '#585858';}
                        if ($visitado=="1") {$json['Analisis'][$i]['color'] =  '#0a2a71';}
                        if ($visitado=="2") {$json['Analisis'][$i]['color'] =  '#da070c';}
                        $i++;
                    }
                    else{
                        $json['Analisis'][$i]['title'] =  "";
                        $json['Analisis'][$i]['id'] = "";
                        $json['Analisis'][$i]['cliente'] = "";
                        $json['Analisis'][$i]['dia'] =  "";
                        $json['Analisis'][$i]['start'] = $this->generarDate($array[$D]);
                        $json['Analisis'][$i]['end'] =  $this->generarDate($array[$D]);
                    }
    				
    				}
    			}
        	}
    	}
        
        return 	$json['Analisis'];
   	}
    /*obtengo la fecha del primer dia de la semana actual (Lunes)*/
    public function generarDate($dia)
    {
        $primer_dia;
        $query = $this->db->query('SELECT SUBDATE(now(),WEEKDAY(now())) as primer_dia');
        foreach ($query->result_array() as $key ) {
            $primer_dia = $key['primer_dia'];
        }       
        switch ($dia) {
            case 'Lunes':
                $primer_dia =strtotime ('+0 day',strtotime($primer_dia));
                $primer_dia = date ( 'Y-m-d' , $primer_dia );
                return $primer_dia;
                break;
            case 'Martes':
                $primer_dia =strtotime ('+1 day',strtotime($primer_dia));
                $primer_dia = date ( 'Y-m-d' , $primer_dia );
                return $primer_dia;
                break;
            case 'Miercoles':
               $primer_dia =strtotime ('+2 day',strtotime($primer_dia));
                $primer_dia = date ( 'Y-m-d' , $primer_dia );
                return $primer_dia;
                break;
            case 'Jueves':
                $primer_dia =strtotime ('+3 day',strtotime($primer_dia));
                $primer_dia = date ( 'Y-m-d' , $primer_dia );
                $primer_dia = strtotime($primer_dia) + 1;
                $primer_dia = date ( 'Y-m-d' , $primer_dia );
                return $primer_dia;
                break;
            case 'Viernes':
                $primer_dia =strtotime ('+4 day',strtotime($primer_dia));
                $primer_dia = date ( 'Y-m-d' , $primer_dia );
                return $primer_dia;
                break;  
            case 'Sabado': 
                $primer_dia =strtotime ('+5 day',strtotime($primer_dia));
                $primer_dia = date ( 'Y-m-d' , $primer_dia );
                return $primer_dia;  
            default:
                $primer_dia =strtotime ('+6 day',strtotime($primer_dia));
                $primer_dia = date ( 'Y-m-d' , $primer_dia );
                return $primer_dia;
                break;
        }
    }
    public function verificarVisitado($idCliente,$IdPlan)
    {
        $this->db->where('IdPlan',$IdPlan);
        $this->db->where('idCliente',$idCliente);
        $this->db->select('Visitado');
        $query = $this->db->get('visitas');
        if ($query->num_rows() >0) {
            foreach ($query->result_array() as $key ) {                         
            return $key['Visitado'];
            }
        }
        else{
        return 0;
        }
    }
}