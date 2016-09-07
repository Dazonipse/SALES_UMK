<?php  ini_set("memory_limit","256M");  ?>
<style>
@font-face {font-family: 'robotoblack'; src: url('/SALES_UMK/assets/fonts/Robot/roboto-black-webfont.eot'); src: url('/SALES_UMK/assets/fonts/Robot/roboto-black-webfont.eot?#iefix') format('embedded-opentype'), url('/SALES_UMK/assets/fonts/Robot/roboto-black-webfont.woff2') format('woff2'), url('/SALES_UMK/assets/fonts/Robot/roboto-black-webfont.woff') format('woff'), url('/SALES_UMK/assets/fonts/Robot/roboto-black-webfont.ttf') format('truetype'), url('/SALES_UMK/assets/fonts/Robot/roboto-black-webfont.svg#robotoblack') format('svg'); font-weight: normal; font-style: normal; } @font-face {font-family: 'robotobold'; src: url('/SALES_UMK/assets/fonts/Robot/roboto-bold-webfont.eot'); src: url('/SALES_UMK/assets/fonts/Robot/roboto-bold-webfont.eot?#iefix') format('embedded-opentype'), url('/SALES_UMK/assets/fonts/Robot/roboto-bold-webfont.woff2') format('woff2'), url('/SALES_UMK/assets/fonts/Robot/roboto-bold-webfont.woff') format('woff'), url('/SALES_UMK/assets/fonts/Robot/roboto-bold-webfont.ttf') format('truetype'), url('/SALES_UMK/assets/fonts/Robot/roboto-bold-webfont.svg#robotobold') format('svg'); font-weight: normal; font-style: normal; } @font-face {font-family: 'robotomedium'; src: url('/SALES_UMK/assets/fonts/Robot/roboto-medium-webfont.eot'); src: url('/SALES_UMK/assets/fonts/Robot/roboto-medium-webfont.eot?#iefix') format('embedded-opentype'), url('/SALES_UMK/assets/fonts/Robot/roboto-medium-webfont.woff2') format('woff2'), url('/SALES_UMK/assets/fonts/Robot/roboto-medium-webfont.woff') format('woff'), url('/SALES_UMK/assets/fonts/Robot/roboto-medium-webfont.ttf') format('truetype'), url('/SALES_UMK/assets/fonts/Robot/roboto-medium-webfont.svg#robotomedium') format('svg'); font-weight: normal; font-style: normal; } @font-face {font-family: 'robotoregular'; src: url('/SALES_UMK/assets/fonts/Robot/roboto-regular-webfont.eot'); src: url('/SALES_UMK/assets/fonts/Robot/roboto-regular-webfont.eot?#iefix') format('embedded-opentype'), url('/SALES_UMK/assets/fonts/Robot/roboto-regular-webfont.woff2') format('woff2'), url('/SALES_UMK/assets/fonts/Robot/roboto-regular-webfont.woff') format('woff'), url('/SALES_UMK/assets/fonts/Robot/roboto-regular-webfont.ttf') format('truetype'), url('/SALES_UMK/assets/fonts/Robot/roboto-regular-webfont.svg#robotoregular') format('svg'); font-weight: normal; font-style: normal; } body {background-color: #fcfcfc; } html{font-family: 'robotomedium'; font-weight: 500; } 

.breadcrumb {
      padding: 0px;
      margin: 15px 0px;
      list-style: none;
    }
    .breadcrumbs-title {
      color: #173AAA;
      font-size: 22px;

    }
    .breadcrumb > li {
      display: inline-block;
    }
    .breadcrumb a {
      color: #00bcd4;
    }
    .breadcrumb .active {
      font-weight: normal;
      color: #999;
    }
    .breadcrumb > li + li:before {
      padding: 0 5px;
      color: #ccc;
      content: "/\00a0";
    }
    h5.breadcrumbs-header {
      font-size: 1.64rem;
      line-height: 1.804rem;
      margin: 1.5rem 0 0 0;
    }
    .breadcrumbs-nav {
      margin: 8px 0 9px 0;
    }
  .negra{
    font-family: 'robotoblack'!important;
    text-transform: uppercase;
  }
  .bold{
    font-family: 'robotobold'!important;
  }
  .medium{
    font-family: 'robotomedium'!important;
  }
  .regular{
    font-family: 'robotoregular'!important;
  }
  .tblcabecera{
    background-color: #173AAA;
    color: white!important;
    font-size: 14px!important;
  }
  table thead tr th{
    text-align: center!important;
    font-size: 14px;
  }
  table tbody tr td{
    text-align: center!important;
    font-size: 11px;
  }
  .tbl td,a{
    color: #253778!important;
    font-size: 12px;
  }
  #NoPedido {
  font-size: 15px;
    color: #173AAA;
    margin: 0px;
}
#tbldetalles tbody tr td{
  border: 1px solid #a8e1f8 !important;
      padding: 5px;
  }
  table {
    border-collapse: collapse;
    border-spacing: 0;
}
table thead tr th {
    text-align: center!important;
    font-size: 14px;
    padding: 5px;
}
.white{
  color: white!important;
}

#tblDetallesIva tbody tr td{
      padding: 5px;
      float: right;
  }
#tblDetallesIva .totalTitulo {
    border: none!important;
    text-align: right!important;
    font-family: 'robotoblack';
    padding: 5px 5px;
    font-size: 13px;
    color: #173AAA;
}
#tblDetallesIva .totalNumero2 {
    background-color: #486BD4;
    border: none!important;
    font-family: 'robotoblack';
    padding: 1px;
    border-radius: 0px;
    font-size: 13px;
    color: #fff;
}
#tblDetallesIva .totalNumero {
    border: none!important;
    background-color: #173aaa;
    font-family: 'robotoblack';
    padding: 3px;
    border-radius: 0px;
    font-size: 13px;
    color: #fff;
}
#tblDetallesIva .totalNumero {
    border: none!important;
    background-color: #173aaa;
    font-family: 'robotoblack';
    padding: 3px;
    border-radius: 0px;
    font-size: 13px;
    color: #fff;
}

 </style>

 <!-- START CONTENT -->
 <section id="content">
  <!--start container-->
  <div class="container"><!--breadcrumbs start-->
    <div id="breadcrumbs-wrapper">
      <div class="container">
        <div class="row">
          <div class="col s12 m12 l12" style="text-align:center;">
            <h5 class="negra breadcrumbs-title"  style="margin:0px;">DETALLE DE PEDIDO</h5>
            <h6 class="medium" id="NoPedido" style="margin:0px;"># <?php echo $detalles[0]['IdPedido']; ?></h6>
            <h6 class="negra" id="NoPedido"><?php echo $detalles[0]['Cliente']; ?></h6><br>
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
              <th class="white" data-field="id">COD. ARTO</th>
              <th class="white" data-field="name">PRODUCTO</th>
              <th class="white" data-field="price">PRECIO UNITARIO</th>
              <th class="white" data-field="price">CANTIDAD</th>
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
    <div style="margin-left: 81.33333%;">
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