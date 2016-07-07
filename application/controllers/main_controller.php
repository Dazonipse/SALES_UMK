<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller 
{

	public function __construct()
        {
            parent::__construct();
                       

        }
    public function main()
    {
    	$this->load->view('headers/header');
    	$this->load->view('Pages/Admin/Main_view');
    	$this->load->view('footer/footer');
    }
    


}