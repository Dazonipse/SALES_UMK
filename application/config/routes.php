<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'login_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/****** MIS RUTAS *****/


//ENTRAR Y SALIR
$route['login'] = 'login_controller/Acreditar';
$route['salir'] = 'login_controller/Salir';

// FUNCIONALIDAD!!!
$route['calendario'] = 'calendario_controller/calendario';
$route['Cobro'] = 'sales_controller/Facturas';
$route['pedido'] = 'sales_controller/Pedido';
$route['Ruta'] = 'sales_controller/Ruta';
/****************************************/