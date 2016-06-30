


<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
            <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details " id="colorMenu">
                    <div class="row">
                        <div class="col col s4 m4 l4">
                            <img src="<?PHP echo base_url(); ?>assets/img/user.jpg" alt="" class="circle responsive-img valign profile-image">
                        </div>
                        <div class=" col col s8 m8 l8">
                            
                            <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">ADMIN</a>
                            <p class="user-roal">Super Administrador</p>
                        </div>
                    </div>
                </li>
                <li class="bold"><a href="calendario" class="waves-effect waves-cyan verde "> HOME</a>
                </li>
                </li>
                <li class="bold"><a href="Cobro" class="waves-effect waves-cyan verde">COBROS</a>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a href="pedido"  class=" waves-effect waves-cyan verde">PEDIDOS</a>

                        </li>

                        <li class="bold"><a href="Ruta" class="  waves-effect waves-cyan verde"><i class="material-icons">directions_car</i> RUTAS</a>

                        </li>
                        <li class="bold"><a href="Usuarios" class="  waves-effect waves-cyan verde"><i class="material-icons">group</i>GRUPOS DE USUARIOS</a> </li>
                          <li class="bold"><a  href="#modal1" class="  waves-effect waves-cyan modal-trigger"><i class="material-icons">arrow_back</i> CERRRAR SESION</a> </li>

                    </ul>
                </li>
               
            </ul>
            <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
        </aside>
        <!-- END LEFT SIDEBAR NAV-->
        <div id="modal1" class="modal">
    <div class="modal-content center">
       <h6>¿DESEA CERRAR SU SESIÓN?</h6>
       
       <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
       <a href="salir" class=" modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
      
      </div>
   
  </div>

        <!-- //////////////////////////////////////////////////////////////////////////// -->