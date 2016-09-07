 <!-- START CONTENT -->
 <section id="content">
  <!--start container-->
  <div class="container"><!--breadcrumbs start-->
    <div id="breadcrumbs-wrapper">
      <div class="container">
        <div class="row">
          <div class="col s12 m12 l12">
            <h5 class="center negra breadcrumbs-title">PEDIDOS</h5> <br>
          </div>
        </div>
      </div>
    </div><!--breadcrumbs end-->
    <div class="progress center" style="display:none;">
      <div class="indeterminate blue"></div>
    </div>
    <div class="invoice-table">
      <div class="row">
        <div class="col s12 m12 l12">
          <table class="tbl responsive-table" id="table_id" class="display">
            <thead>
              <tr class="tblcabecera">
                <th>FECHA</th>
                <th># PEDIDO</th>
                <!--<th>COD. CLIENTE</th>-->
                <th>ESTADO</th>
                <th>CLIENTE</th> 
                <th>TOTAL</th>
              </tr>
            </thead>
            <tbody>
             <?php 
             if (!($pedidos)) {}
              else{  $estado;switch ($pedidos[0]['Estado']) {
                    case 0:$estado='RECIBIDO';break;
                    case 1:$estado='INGRESADO';break;
                    case 2:$estado='PENDIENTE POR INVENTARIO';break;                    
                    default:$estado='NO DEFINIDO';break;}
                foreach ($pedidos as $key) {                  
                    echo "<tr>                   
                    <td class='regular'>".date_format(date_create($key['Fecha']),'d-m-Y')."</td>
                    <td class='negra'><a class='tooltipped' data-position='top' data-delay='10' data-tooltip='PRESIONE PARA VER DETALLE' href='detallepedido/".$key['IdPedido']."'>".$key['IdPedido']."</a></td>                    
                    <td>".$estado."</td>
                    <td class='regular'>".$key['Cliente']."</td>
                    <td class='regular'>".$key['Cliente']."</td>
                    </tr>";
                  }
                }
                ?>
              </tbody>
            </table>            
          </div>
        </div>
      </div>
    </div><!--end container-->
  </section><!-- END CONTENT -->
  <!---ESTRUCTURA DEL ACORDION PARA DESPLEGAR LOS DETALLES
  <div class="row">
    <div class="col l12">
      <ul class="collapsible" data-collapsible="accordion">
        <?php 
      /*  if (!($pedidos)) {}
              else{  $estado;switch ($pedidos[0]['Estado']) {
                    case 0:$estado='RECIBIDO';break;
                    case 1:$estado='INGRESADO';break;
                    case 2:$estado='PENDIENTE POR INVENTARIO';break;                    
                    default:$estado='NO DEFINIDO';break;}
                foreach ($pedidos as $key) {
                    echo "
                      <li>
                        <div class='collapsible-header'><i class='material-icons'>filter_drama</i>PEDIDO #: ".$key['IdPedido']." CLIENTE: ".$key['Cliente']." </div>
                        <div class='collapsible-body'>
                           <table class='tbl responsive-table' id='' class='display'>
                              <thead>
                                <tr class='tblcabecera'>
                                  <th>FECHA</th>
                                  <th>ARTICULO</th>
                                  <th>DESCRIPCION</th>
                                  <th>CANTIDAD</th> 
                                  <th>PRECIO</th>
                                </tr>
                              </thead>
                              <tbody>";
                               foreach ($detalles as $key2) {
                                    if ($key['IdPedido']==$key2['IdPedido']) {
                                      echo "                      
                                          <tr>                   
                                            <td class='regular'>".date_format(date_create($key2['Fecha']),'d-m-Y')."</td>
                                            <td class='negra'>".$key2['IdArticulo']."</a></td>                    
                                            <td>".$key2['Descripcion']."</td>
                                            <td class='regular'>".$key2['Cantidad']."</td>
                                            <td class='regular'>".$key2['Precio']."</td>
                                          </tr>";
                                       
                                    }
                                  }                            
                             echo "</tbody>
                          </table>
                        </div>";                                          
                      echo "</li>";
                  }
                }
         */?>
      </ul>
    </div>
  </div>-->