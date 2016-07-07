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
$route['HOME'] = 'sales_controller/Home';

$route['calendario'] = 'calendario_controller/calendario';

$route['pedido'] = 'sales_controller/Pedido';
$route['DetallesPedido']='sales_controller/DetallesPedido';


$route['Cobro'] = 'sales_controller/Facturas';
$route['Recibo']='sales_controller/recibo';

$route['Observaciones'] = 'sales_controller/Observaciones';

$route['Usuarios'] = 'sales_controller/Users';

$route['Reportes'] = 'sales_controller/Reportes';


/****************************************/