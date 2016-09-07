<input disabled="disabled" id="passactual2" type="hidden" class="validate" value="<?php echo $this->session->userdata('Pass'); ?>">
<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
            <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li id="fondoUser"  class="user-details">
                    <div class="row">
                        <div id="logo"class="center">
                            <img  src="<?php echo base_url();?>assets/img/logo-sales.png" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col s8 m8 l12 center">
                            <div class="center">
                             <!-- <p class="user-roal valign-wrapper" data-activates="dropdown1"><i class="material-icons prefix valign-wrapper" >face</i>Super Administrador</p>-->
                             <ul class="hide-on-med-and-down">
                              <li><a id="labelusuario" class="dropdown-button left" href="#!" data-activates="dropdown1"><i class="material-icons left">face</i>Super Administrador</a></li>
                          </ul>
                      </div>
                  </div>                        
              </div>
              <!-- Dropdown Structure -->
              <ul id="dropdown1" class="dropdown-content">
                  <li><a id="dropdownMenu" class="modal-trigger" href="#modalContrasena">CAMBIAR CONTRASEÑA</a></li>
              </ul>

          </li>
          <ul class="fondoMenu">
            <li ><a href="<?php echo base_url('index.php/HOME')?>" class=" verde menu "><i class="material-icons">home</i> inicio</a> </li>
            <li ><a href="<?php echo base_url('index.php/calendario')?>" class="verde menu"><i class="material-icons">date_range</i>plan de trabajo</a>  </li>
            <li ><a href="<?php echo base_url('index.php/pedido')?>" class="verde menu"><i class="material-icons">shopping_cart</i>pedidos</a></li>
            <li ><a href="<?php echo base_url('index.php/Cobro')?>" class="verde menu"><i class="material-icons">business_center</i>cobros</a></li>
            <li ><a href="<?php echo base_url('index.php/Usuarios')?>" class="verde menu"><i class="material-icons">group</i>usuarios</a> </li>
            <li ><a href="<?php echo base_url('index.php/Observaciones')?>" class="verde menu"><i class="material-icons">brightness_auto</i>act. ejecutiva</a> </li>
            <li ><a href="<?php echo base_url('index.php/Reportes')?>" class="verde menu"><i class="material-icons">description</i> reportes</a> </li>
            <li><a href="<?php echo base_url('index.php/salir')?>" class="verde menu"><i class="material-icons">exit_to_app</i>Cerrar Sesión</a></li>
            <li><div class="row copyright center regular">© <?php echo date('Y')?> Copyright GCIT-GUMA</div></li>

        </ul>
    </ul>
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
</aside>
<!-- END LEFT SIDEBAR NAV-->
<!-- Modal Structure cambio de contraseña -->
<div id="modalContrasena" class="modal">
    <div class="btnCerrar">
      <i  style='color:red;' class="material-icons modal-action modal-close">highlight_off</i>
      </div>
    <div class="modal-content">
      <h5 class="center negra breadcrumbs-title">CAMBIO DE CONTRASEÑA</h5>
        <div class="row margeninferior">
    <form id="ekisde" action="<?php echo base_url('index.php/EditPass')?>" method="post" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons iconospass prefix">account_circle</i>
          <input disabled="disabled" id="icon_prefix" type="text" class="validate">
          <label style="text-align:center;" for="icon_prefix"><?php echo $this->session->userdata('UserN'); ?></label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons iconospass prefix">dialpad</i>
          <input id="passactual" type="password" class="validate">
          <label class="textospass" for="passactual">Digite la contraseña actual</label>
        </div>
      </div>

       <div class="row margeninferior">
        <div class="input-field col s6">
          <i class="material-icons iconospass prefix">apps</i>
          <input name="pass1" id="pass1" type="password" class="validate">
          <label class="textospass" for="pass1">Digite la nueva contraseña</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons iconospass prefix">apps</i>
          <input name="pass2" id="pass2" type="password" class="validate">
          <label class="textospass" for="pass2">Repita la nueva contraseña</label>
        </div>
      </div>
    </form>
  </div>
    </div>
  <div class="row center">
          <div class="center s12 l3">
           <a href="#"><i id='okpass' style='color:green;' class="material-icons">done</i></a>
          </div>
        </div>
      </div>
</div>