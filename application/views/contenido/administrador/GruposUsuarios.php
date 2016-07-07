<!---->

  <section id="content">

    <!--breadcrumbs start-->
            <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <h5 class="center breadcrumbs-title">USUARIOS</h5> <br>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->
               <!--start container-->
            <div class="container">
                <div id="invoice">
                    <div class="invoice-header">
                        <div class="row section">
                            
                         
                        </div>
                    </div>
                    
                    <div class="selectores">
                      <div class="row">
                        <div class="col s3">
                          <a class="waves-effect waves-light btn modal-trigger" href="#modal1">NUEVO</a>
                        </div>
                        
                      </div>


                    <div class="invoice-table">
                        <div class="row">
                            <div class="col s12 m12 l12">
                              <p class="center">LISTA DE USUARIOS</p>
                                <table class="striped">
                                    <thead>
                                    <tr>
                                        <th >No.</th>
                                        <th >Usuario</th>
                                        <th>Nombre de usuario</th>
                                        <th >Fecha de Creación</th>
                                        
                                      
                                    </tr>
                                    </thead>

                                      <tbody>

                                          <?php
                                                        $i=1;
                                                        foreach ($user as $key) {
                                                           echo "
                                                            <tr>                                    
                                                                <td>".$i."</td>
                                                                <td>".$key['Usuario'].".</td>
                                                                <td>".$key['NombreUsuario']."</td>
                                                                <td>".$key['FechaCreacion']."</td>
                                                                
                                                            </tr>
                                                            ";
                                                            $i++;
                                                        }
                                        ?>
                                      
                                      </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                                        <!-- Modal Structure -->
                      <div id="modal1" class="modal">
                        <div class="modal-content">
                          
                                  <center><h4> NUEVO USUARIO</h4></center>
      
                          <div class="row">
                                  <form class="col s12" action="<?php echo base_url('index.php/nuevoUser');?>"method="post" name="formnuevo">
                                    <div class="row">
                                      <div class="input-field col s6">
                                        <input name="unoUser" placeholder="Nombre" id="nombre" type="text" class="validate">
                                        <label for="nombre"></label>
                                      </div>
                                      <div class="input-field col s6">
                                        <input name="dosUser" placeholder="Nombre de usuario"id="usuario1" type="text" class="validate">
                                        <label for="usuario1"></label>
                                      </div>
                                    </div>
                                  
                                    <div class="row">
                                      <div class="input-field col s6">
                                        <input name="tres" placeholder="Contraseña" id="pass" type="password" class="validate">
                                        <label for="pass"></label>
                                      </div>
                                      <div class="input-field col s6">
                                        <input name="cuatro" placeholder="Escriba de nuevo la contraseña"id="pass2" type="password" class="validate">
                                        <label for="pass2"></label>
                                      </div>
                                    </div>

                                      <div class="row">
                                      <div class=" input-field col s6"  >
                                        <select name="permiso" id="tipoUser">
                                           <option value="" disabled selected>Tipo de Usuario</option>
                                              <option value="1">Service</option>
                                                <option value="2">Administrativo</option>               
                                          </select>
                                      </div>
                                    </div>
                                         <div class="modal-footer"> 
                          <div class="row">
                             <div class="col s12">
                              <div class="col s6">
                                  <a href="#!" class=" modal-action modal-close waves-effect f btn">Cancelar</a>
                              </div>
                              <div class="col s6">
                                  <a href="#!" class=" modal-action  waves-effect f btn" onclick="compararuser()">Aceptar</a>
                              </div>
                          </div> 
                          </div>
                      </div>   
                                   </form>
                          </div>
        


                        </div>
                       
                      </div>

                </div>
            </div>
            <!--end container-->






  </section>