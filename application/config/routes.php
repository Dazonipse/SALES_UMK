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
$route['DetallesPedido']='sales_controller/DetallesPedido';
$route['Recibo']='sales_controller/recibo';
$route['Observaciones'] = 'sales_controller/Observaciones';



/*******/////////USUARIOS/////////////*/
$route['Usuarios'] = 'usuarios_controller/Users';
$route['NuevoUsuario'] = 'usuarios_controller/nuevoUsuario';
$route['EditUsuarios/(:any)/(:any)'] = 'usuarios_controller/EditUsers/$1/$2';


/*******/////////RECIBO/////////////*/
$route['Cobro'] = 'recibo_controller';
$route['getDetalle/(:any)'] = 'recibo_controller/obtenerDetalle/$1';
$route['getDetalle2'] = 'recibo_controller/obtenerDetalle2';

/*******/////////PEDIDO/////////////*/
$route['pedido'] = 'pedido_controller/Pedido';
$route['ajaxDetallePedido']='pedido_controller/cabeceraPedido';
$route['ajaxPedido/(:any)']='pedido_controller/DetallePedido/$1';
$route['ajaxUpdatePedido/(:any)/(:any)']='pedido_controller/UpdateEstado/$1/$2';

/***********////////REPORTES /////////////*/
$route['Reportes'] = 'sales_controller/Reportes';


/**********////CALENDARIO***///********/
$route['ajaxCalendario/(:any)']='calendario_controller/CargarEventos/$1';