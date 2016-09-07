<section id="content">        
  <div id="breadcrumbs-wrapper">
    <div class="container">
      <div class="row">
        <div class="col s12 m12 l12">
          <h5 class="center negra breadcrumbs-title">REPORTES</h5> <br>
        </div>
      </div>
    </div>
  </div><!--breadcrumbs end-->
        <!--start container-->
        <div class="container">
          <div class="section">
            <div class="divider"></div>
            <div id="full-calendar">              
              <div class="row">
               <div class="col s12 m6 l3" id="menur"><!--MENU DE REPORTES-->
                  <ul class="collection">
                    <li id="1" class="click-to-toggle menureportes collection-item valign-wrapper avatar">
                      <i class="material-icons circle">assessment</i>
                      <span class="title">REPORTE DE VENTAS</span>
                    </li>
                    <li id="2" class="menureportes collection-item valign-wrapper avatar">
                      <i class="material-icons circle">folder</i>
                      <span class="title">REPORTE DE CHATEL</span>
                      </p>
                    </li>
                    <li id="3" class="menureportes collection-item valign-wrapper avatar">
                      <i class="material-icons circle">insert_chart</i>
                      <span class="title">REPORTE DE CHATEL</span>
                    </li>
                    <li id="4" class="menureportes collection-item valign-wrapper avatar">
                      <i class="material-icons circle">insert_chart</i>
                      <span class="title">REPORTE DE CHATEL</span>
                    </li>
                  </ul>                 
              </div>
              <div class="col l9">
               <div class="row">
                <div class="card">
                <form class="col s12">
                  <div class="row">
                    <div class="regular input-field col s12 l3">
                       <select id="ruta">
                        <option value="" disabled selected>RUTA</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                      </select>
                    </div>
                    <div class="input-field col s12 l3">
                        <input name="f1" id="f1" type="date" class="datepicker">
                        <label for="f1" class="">DESDE:</label>
                    </div>
                     <div class="input-field col s12 l3">
                        <input name="f2" id="f2" type="date" class="datepicker">
                        <label for="f2" class="">HASTA:</label>
                    </div>
                    <!--<div class="input-field col s12 l5">
                        <input id="cliente" type="text" class="validate">
                        <label for="cliente" class="">CLIENTE:</label>
                    </div>-->
                  <div class="input-field col s12 l1">
                       <a ><i id="buscar" class="searchreport material-icons">search</i></a>
                  </div>
                </form>
                </div>
              </div>
              <div class="row">
                <div class="col s12 l12">
                   <div class="progress center" style="display:none;">
                      <div class="indeterminate blue"></div>
                    </div>
                  <table id="tblReporte" class="display tbl" cellspacing="0" width="100%">
                      <thead><tr class="tblcabecera"></tr></thead><!-- TABLA DE REPORTES -->
                  </table>
                </div>
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>
        <!--end container-->
</section>
<!-- END CONTENT -->