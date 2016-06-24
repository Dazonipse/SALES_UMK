<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'login_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/****** MIS RUTAS *****/



$route['login'] = 'login_controller/Acreditar';
$route['calendario'] = 'calendario_controller/calendario';
$route['Factura'] = 'sales_controller/Facturas';

/****************************************/