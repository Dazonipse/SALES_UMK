 <!-- START CONTENT -->
 <section id="content">
  <!--start container-->
  <div class="container"><!--breadcrumbs start-->
    <div id="breadcrumbs-wrapper">
      <div class="container">
        <div class="row">
          <div class="col s12 m12 l12">
            <h5 class="center negra breadcrumbs-title">DETALLE DE PEDIDO</h5>
            <h6 class="center medium" id="NoPedido"># <?php echo $detalles[0]['IdPedido']; ?></h6><br>
            <h6 class="center negra" id="NoPedido"><?php echo $detalles[0]['Cliente']; ?></h6><br>
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
         <table id="tbldetalles">
          <thead>
            <tr class="tblcabecera">
              <th data-field="id">COD. ARTO</th>
              <th data-field="name">PRODUCTO</th>
              <th data-field="price">PRECIO UNITARIO</th>
              <th data-field="price">CANTIDAD</th>
            </tr>
          </thead>
          <tbody>
            <?php $total=0; 
            if (!($detalles)) {}
            else{ foreach ($detalles as $key) {
              $total=$total+($key['Precio']*$key['Cantidad']);
                    echo "<tr>
                          <td class='negra' id='filasdetalle'>".$key['IdArticulo']."</td>
                          <td class='regular' id='filasresalto'>".$key['Descripcion']."</td>
                          <td class='negra' id='filasdetalle'>".$key['Cantidad']."</td>
                          <td class='negra' id='filasdetalle'>".$key['Precio']."</td>
                          </tr>";
                  }
                }
             ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <br>
</div><!--end container-->
  <div class="row margen">
    <div class="col s12 l4">
      <?php $estado;switch ($detalles[0]['Estado']) {
                    case 0:$estado='RECIBIDO';break;
                    case 1:$estado='INGRESADO';break;
                    case 2:$estado='PENDIENTE POR INVENTARIO';break;                    
                    default:$estado='NO DEFINIDO';break;}?>
      <select id="estadoPedido" onchange="updateEstadoPedido(this.value,'<?php echo $detalles[0]['IdPedido']; ?>')">
                    <option value="" disabled selected><?php echo $estado; ?></option>
                    <option value="0">RECIBIDO</option>
                    <option value="1">INGRESADO</option>
                    <option value="2">PENDIENTE POR INVENTARIO</option>
      </select>
    </div>
    <div class="col s12 offset-l4 l4">
      <table id="tblDetallesIva">
        <thead>      
        </thead>
        <tbody>
          <tr>
            <td class="totalTitulo">PRODUCTO </td>           
            <td class="totalNumero"><?php echo number_format($total,2); ?></td>
          </tr>
          <tr>
            <td class="totalTitulo">I.V.A</td>
            <td class="totalNumero2"><?php echo number_format($total*0.15,2); ?></td>
          </tr>
          <tr>
            <td class="totalTitulo">TOTAL</td>
            <td class="totalNumero"><?php echo number_format($total+($total*0.15),2); ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section><!-- END CONTENT -->

<!-- Modal Structure -->
    <div style='width:30%;' id="modalConfirmar" class="modal">
      <div class="btnCerrar">
      <i  style='color:red;' class="material-icons modal-action modal-close">highlight_off</i>
      </div>
      <div class="modal-content center">
        <h5 id="mensaje">¿Desea cambiar el estado de este pedido?</h5>
        <div class="row center">
          <div class="center s12 l3">
           <a href=""><i id='okPedido' style='color:green;' class="material-icons">done</i></a>
          </div>
        </div>
      </div>
    </div>