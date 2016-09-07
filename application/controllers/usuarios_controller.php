<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_controller extends CI_Controller
{
	  public function __construct()
    {
        parent::__construct();
        $this->load->model('usuarios_model');
    }
    public function Users()
    {
        $data['user'] = $this->usuarios_model->usuarios();
        $data['grupos'] = $this->usuarios_model->TraerGrupos();
        $data['JefesDeGrupos'] = $this->usuarios_model->TraerJefes();
        $this->load->view('header/header');
        $this->load->view('contenido/Menu');
        $this->load->view('contenido/usuario/GruposUsuarios',$data);
        $this->load->view('footer/footer');
    }
    public function EditUsers($cod,$estado)
    {
        $data['user'] = $this->usuarios_model->EditUser($cod,$estado);    	
    }
    public function nuevoUsuario()
    {
        $nombre=$_POST['nombre'];
        $permiso=$_POST['permiso'];
        $pass=$_POST['pass'];
        if ($permiso==4) {
            echo "vendedor";;
        }else{echo "otro...";}
        //$this->usuarios_model->guardarUsuario($nombre,$pass,$permiso);
        //$this->Users();
    }
    public function EditPass()
    {
        $pass=$_POST['pass1'];
        $pass2=$_POST['pass2'];
        if ($pass=="" or ($pass2!=$pass)) {
            header(base_url('index.php'));
        }
        else{
            $this->usuarios_model->EditPass($pass);
        }
    }
    public function ajaxCrearGrupos()
    {
        $this->usuarios_model->guardarGrupo($_POST['nombreGrupo'],$_POST['nombreEncargado']);
    }
    public function getGrupos()
    {
        $data['sc_get']=$this->usuarios_model->getGrupos();
        $sc=json_encode($data['sc_get']);
        echo $sc;
    }
}