 <section id="content">

  <!--start container-->
  <div class="container">
   <div class="row">
    <div class="col s12 m12 l12">
      <h5 class="center negra breadcrumbs-title">COBROS</h5> <br>
    </div>
  </div>

  <div class="row">
    <div class="col l12">
      <table id="tblCobros" class="tbl">
        <thead>
          <tr class="tblcabecera">
            <th>FECHA</th>
            <th># RECIBO</th>
            <th>CLIENTE</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <?php 
        if (!($recibos)) {}
          else{
            foreach ($recibos as $key) {
              echo "<tr>
              <td class='regular'>".date_format(date_create($key['Fecha']),'d-m-Y')."</td>
              <td class='negra'><a href='#' onclick='detalleCobro(".'"'.$key['IdRecibo'].'"'.")'>".$key['IdRecibo']."</a></td>
              <td class='regular'>".$key['Recibimos']."</td>
              <td class='regular'>".number_format($key['MRecibo'],2)."</td>
              </tr>";
            }
            }
          ?>
        </tbody>
      </table>      
    </div>
  </div>
</div>
<!--end container-->
</section>
<!-- END CONTENT -->


 <!-- Modal Structure -->
  <div id="modalDetalle" class="modal">
     <div class="btnCerrar">
      <i  style='color:red;' class="material-icons modal-action modal-close">highlight_off</i>
      </div>
    <div class="modal-content">
      <div class="row center">        
          <h5 class="center negra breadcrumbs-title">RECIBO</h5>
          <p id="NoRecibo" class="negra"></p>
          <p id="cliente" class="regular"></p>
      </div>

      <div class="row">
      <table id="tbldetalles">
        <thead>
          <tr class="tblcabecera">
              <th data-field="id"># FACTURA</th>
              <th data-field="name">VALOR</th>
              <th data-field="price">DESCUENTO</th>
              <th data-field="price">MONTO</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
        </table>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">ACEPTAR</a>
    </div>
  </div>