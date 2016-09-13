<section id="content">
  <!--breadcrumbs start-->
  <div id="breadcrumbs-wrapper">
    <div class="container">
      <div class="row">
        <div class="col s12 m12 l12">
          <h5 class="center negra breadcrumbs-title">USUARIOS</h5> <br>
        </div>
      </div>
    </div>
  </div>
  <!--breadcrumbs end-->
  <!--start container-->
  <div class="container">
    <div id="invoice">
      <div class="invoice-header">
      </div><br>
      <div class="selectores">
        <div class="row">
          <div class="offset-l10 right col s12 l2">
            <a class="waves-effect waves-light btn modal-trigger" id="btnNuevo" href="#modal1">NUEVO</a>
          </div>
        </div><br>
        <div class="invoice-table">
          <div class="row">
            <div class="col s12 m12 l12">
            <table class="tbl" id="table_id" class="display">
                <thead>
                    <tr class="tblcabecera">
                          <th>No.</th>
                          <th>Nombre de usuario</th>
                          <th>Permisos</th>
                          <th>Fecha de Creación</th> 
                          <th>Opción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                      if (!($user)) {}
                      else{
                    $i=1;
                    foreach ($user as $key) {
                    $opcion="";$privilegio="";
                    switch ($key['Activo']) {
                      case '0':$opcion="<a href='#' onclick='editarUsuario(".'"'.$key['UsuarioID'].'"'.",".'"'.$key['Activo'].'"'.")'><i style='color:red'; class='material-icons'>highlight_off</i></a>";break;                      
                      case '1':$opcion="<a href='#' onclick='editarUsuario(".'"'.$key['UsuarioID'].'"'.",".'"'.$key['Activo'].'"'.")'><i style='color:green'; class='material-icons'>done_all</i></a>";break;
                      }
                      switch ($key['Privilegio']){
                        case '0':$privilegio= "Super Administrador";break;
                        case '1':$privilegio= "Administrativo";break;
                        case '2':$privilegio= "Atención al Cliente";break;
                        case '3':$privilegio= "Reporteria";break;
                        default:$privilegio= "Vendedor";break;}
                    echo "
                    <tr>                                    
                      <td class='regular'>".$i."</td>
                      <td class='negra'>".$key['NombreUsuario']."</td>
                      <td class='regular'>".$privilegio."</td>
                      <td class='regular'>". date('d-m-Y',strtotime($key['FechaCreacion']))."</td>
                      <td>".$opcion."</td> 
                    </tr>";
                    $i++;
                  }
                  }?> 
                </tbody>
            </table>            
            </div>
          </div>
        </div>

        <!-- Modal Structure -->
        <div id="modal1" class="modal">
          <div class="btnCerrar">
           <i id="closeUser" style='color:red; cursor:pointer;' class="material-icons modal-action">highlight_off</i>
          </div>
          <div class="modal-content">
            <center><h4> NUEVO USUARIO</h4></center>
            <div class="row">
              <form id="frmUsuario" class="col s12" action="<?php echo base_url('index.php/NuevoUsuario');?>" method="post" name="formnuevo">
                <div class="row">                  
                  <div class="input-field col s12 l6">
                    <input name="nombre" placeholder="Nombre de usuario" id="usuario1" type="text" class="validate">
                    <label for="usuario1"></label>
                  </div>
                  <div class=" input-field col s12 l6"  >
                    <select name="permiso" id="tipoUser">
                     <option value="" disabled selected>Tipo de Usuario</option>
                     <option value="0">Super Administrador</option>
                     <option value="1">Administrativo</option>
                     <option value="2">Atención al Cliente</option>
                     <option value="3">Reporteria</option>
                     <option value="4">Vendedor</option>
                   </select>
                 </div>
                </div>
                <div class="row grupoOculto" style="display:none;">
                  <div class=" input-field col s12 l6"  >
                    <select name="permiso" id="selectGrupos">
                     <option value="" disabled selected>Seleccione un Grupo</option>
                     <?php 
                     if (!($grupos)) {}
                      else{
                        foreach ($grupos as $key) {
                          echo "<option value=".$key['IdGrupo'].">".$key['NombreGrupo']."</option>";
                        }
                      }
                      ?>
                   </select>
                 </div>
                 <div class="col s12 l2">
                    <a class="modal-trigger waves-effect btn-large tooltipped btn-floating" href="#modalAddGrupo" data-position="right" data-delay="50" data-tooltip="Crear Grupo"><i class="material-icons">add</i></a>
                    <!--<a  href="#modalAddGrupo" class="modal-trigger btn-floating btn-large tooltipped waves-effect waves-light" data-position="right" data-delay="50" data-tooltip="Crear Grupo"><i class="material-icons">add</i></a>-->
                 </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 l6">
                    <input name="pass" placeholder="Contraseña" id="pass" type="password" class="validate">
                    <label for="pass"></label>
                  </div>
                  <div class="input-field col s12 l6">
                    <input name="cuatro" placeholder="Escriba de nuevo la contraseña" id="cuatro" type="text" class="validate">
                    <label for="ekisde"></label>
                  </div>
                </div>
               <div class="modal-footer"> 
                <div class="row">
                  <div class="offset-l4 col s12 l3">
                    <a id="aceptar" href="#!" class="waves-effect btn" onclick="crearUsuario()">Aceptar</a>
                  </div>                
              </div>
            </div>   
          </form>
        </div>
      </div>
    </div>

   <!-- Modal Structure agregar grupo-->
    <div id="modalAddGrupo" class="modal">
      <div class="btnCerrar">
        <i id="closeGrupo" style='color:red; cursor:pointer;' class="material-icons modal-action">highlight_off</i>
      </div>
          <div class="modal-content">
            <center><h4> NUEVO GRUPO</h4></center>
             <div class="row">                  
                  <div class="input-field col s12 l6">
                    <input name="nombreGrupo" placeholder="Nombre de Grupo" id="nombreGrupo" type="text" class="validate">
                    <label for="nombreGrupo"></label>
                  </div>
                  <div class=" input-field col s12 l6"  >
                    <select name="JefeGrupo" id="JefeGrupo">
                     <option value="" disabled selected>Encargado de Grupo</option>
                     <?php 
                      if (!($JefesDeGrupos)) {}
                            else{
                              foreach ($JefesDeGrupos as $key) {
                              echo "<option value=".$key['UsuarioID'].">".$key['NombreUsuario']."</option>";
                          }    
                        }                           
                      ?>
                   </select>
                 </div>
                </div>
            <div class="row">
               <div class="modal-footer"> 
                <div class="row">
                  <div id="progresGrupo" class="progress" style="display:none;">
                      <div class="indeterminate blue"></div>
                  </div>
                  <div class="offset-l4 col s12 l3">
                    <a id="aceptarGrupo" href="#!" class="waves-effect btn" onclick="crearGrupo()">Aceptar</a>
                  </div>
              </div>
            </div>   
        </div>
      </div>
    </div>

   <!-- Modal Structure -->
    <div style='width:30%;' id="modaleditar" class="modal">
      <div class="btnCerrar">
      <i  style='color:red;' class="material-icons modal-action modal-close">highlight_off</i>
      </div>
      <div class="modal-content center">
        <h5 id="mensaje"></h5>
        <div class="row center">
          <div class="center s12 l3">
            <a href=""><i id='ok' style='color:green;' class="material-icons">done</i></a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
<!--end container-->
</section>
