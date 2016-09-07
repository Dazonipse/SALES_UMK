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
$route['EditPass'] = 'usuarios_controller/EditPass';
$route['ajaxCrearGrupos']='usuarios_controller/ajaxCrearGrupos';
$route['getGrupos']='usuarios_controller/getGrupos';

/*******/////////RECIBO/////////////*/
$route['Cobro'] = 'recibo_controller';
$route['getDetalle/(:any)'] = 'recibo_controller/obtenerDetalle/$1';
$route['getDetalle2'] = 'recibo_controller/obtenerDetalle2';

/*******/////////PEDIDO/////////////*/
$route['pedido'] = 'pedido_controller/Pedido';
$route['detallepedido/(:any)'] = 'pedido_controller/detallePedido/$1';
$route['ajaxDetallePedido']='pedido_controller/cabeceraPedido';
$route['ajaxPedido/(:any)']='pedido_controller/DetallePedido/$1';
$route['ajaxUpdatePedido/(:any)/(:any)']='pedido_controller/UpdateEstado/$1/$2';

/***********////////REPORTES /////////////*/
$route['Reportes'] = 'reportes_controller';
$route['ajaxReportes/(:any)/(:any)/(:any)/(:any)']='reportes_controller/ajaxReportes/$1/$2/$3/$4';
$route['ajaxReportes2/(:any)']='reportes_controller/ajaxReportesDetalle/$1';
$route['ajaxPdfPedido/(:any)']='reportes_controller/ajaxPdfDetalle/$1';


/**********////CALENDARIO***///********/
$route['ajaxCalendario/(:any)']='calendario_controller/CargarEventos/$1';