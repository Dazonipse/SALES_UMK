<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START HEADER -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="blue">
            <div class="nav-wrapper">
                <h1 class="logo-wrapper"><a href="index.html"   class="brand-logo darken-1"><img src="<?PHP echo base_url(); ?>assets/img/logoUMK.png" width="45%"></a> <span class="logo-text"></span></h1>
                <ul class="right hide-on-med-and-down">
                    <!-- <li class="search-out">
                         <input type="text" class="search-out-text">
                     </li>
                     <li>
                         <a href="javascript:void(0);" class="waves-effect waves-block waves-light show-search"><i class="mdi-action-search"></i></a>
                     </li>
                     <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                     </li>
                     <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a>
                     </li>-->
                    <!-- Dropdown Trigger -->
                    <!--<li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>-->
                    <li><a href="#" > <i class="material-icons">ppower_settings_new</i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->

<!-- END HEADER -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
            <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details cyan darken-2">
                    <div class="row">
                        <div class="col col s4 m4 l4">
                            <img src="<?PHP echo base_url(); ?>assets/img/user.jpg" alt="" class="circle responsive-img valign profile-image">
                        </div>
                        <div class="col col s8 m8 l8">
                            <!--<ul id="profile-dropdown" class="dropdown-content">
                               li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                               </li>
                               <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                               </li>
                               <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                               </li>
                               <li class="divider"></li>
                               <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                               </li>
                               <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                               </li>
                            </ul>-->
                            <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">ADMIN<!--<i class="mdi-navigation-arrow-drop-down right"></i>--></a>
                            <p class="user-roal">Super Administrador</p>
                        </div>
                    </div>
                </li>
                <li class="bold"><a href="#!" class="waves-effect waves-cyan"><!--<i class="mdi-action-dashboard"></i>--> HOME</a>
                </li>
                <!--<li class="bold"><a href="app-email.html" class="waves-effect waves-cyan"><i class="mdi-communication-email"></i> Mailbox <span class="new badge">4</span></a>-->
                </li>
                <li class="bold"><a href="#!" class="waves-effect waves-cyan"><!--<i class="mdi-editor-insert-invitation"></i>--> COBROS</a>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><!--<i class="mdi-action-invert-colors"></i>--> PEDIDOS</a>
                            <!-- <div class="collapsible-body">
                                 <ul>
                                     <li><a href="css-typography.html">Typography</a>
                                     </li>
                                     <li><a href="css-icons.html">Icons</a>
                                     </li>
                                     <li><a href="css-shadow.html">Shadow</a>
                                     </li>
                                     <li><a href="css-media.html">Media</a>
                                     </li>
                                     <li><a href="css-sass.html">Sass</a>
                                     </li>
                                 </ul>
                             </div>-->
                        </li>
                        <!-- <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-image-palette"></i> UI Elements</a>
                             <div class="collapsible-body">
                                 <ul>
                                     <li><a href="ui-buttons.html">Buttons</a>
                                     </li>
                                     <li><a href="ui-badges.html">Badges</a>
                                     </li>
                                     <li><a href="ui-cards.html">Cards</a>
                                     </li>
                                     <li><a href="ui-collections.html">Collections</a>
                                     </li>
                                     <li><a href="ui-accordions.html">Accordian</a>
                                     </li>
                                     <li><a href="ui-navbar.html">Navbar</a>
                                     </li>
                                     <li><a href="ui-pagination.html">Pagination</a>
                                     </li>
                                     <li><a href="ui-preloader.html">Preloader</a>
                                     </li>
                                     <li><a href="ui-modals.html">Modals</a>
                                     </li>
                                     <li><a href="ui-media.html">Media</a>
                                     </li>
                                     <li><a href="ui-toasts.html">Toasts</a>
                                     </li>
                                     <li><a href="ui-tooltip.html">Tooltip</a>
                                     </li>
                                 </ul>
                             </div>
                         </li>-->
                        <!-- <li class="bold"><a href="app-widget.html" class="waves-effect waves-cyan"><i class="mdi-device-now-widgets"></i> Widgets <span class="new badge"></span></a>
                         </li>-->
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><!--<i class="mdi-editor-border-all"></i>--> RUTAS</a>
                            <!-- <div class="collapsible-body">
                                 <ul>
                                     <li><a href="table-basic.html">Basic Tables</a>
                                     </li>
                                     <li><a href="table-data.html">Data Tables</a>
                                     </li>
                                 </ul>
                             </div>-->
                        </li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><!--<i class="mdi-editor-insert-comment"></i>--> GRUPOS DE USUARIOS</a>
                            <!--<div class="collapsible-body">
                                <ul>
                                    <li><a href="form-elements.html">Form Elements</a>
                                    </li>
                                    <li><a href="form-layouts.html">Form Layouts</a>
                                    </li>
                                </ul>
                            </div>-->
                        </li>
                        <!--<li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-social-pages"></i> Pages</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="page-login.html">Login</a>
                                    </li>
                                    <li><a href="page-register.html">Register</a>
                                    </li>
                                    <li><a href="page-lock-screen.html">Lock Screen</a>
                                    </li>
                                    <li><a href="page-invoice.html">Invoice</a>
                                    </li>
                                    <li><a href="page-404.html">404</a>
                                    </li>
                                    <li><a href="page-500.html">500</a>
                                    </li>
                                    <li><a href="page-blank.html">Blank</a>
                                    </li>
                                </ul>
                            </div>
                        </li>-->
                        <!-- <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-chart"></i> Charts</a>
                             <div class="collapsible-body">
                                 <ul>
                                     <li><a href="charts-chartjs.html">Chart JS</a>
                                     </li>
                                     <li><a href="charts-chartist.html">Chartist</a>
                                     </li>
                                     <li><a href="charts-morris.html">Morris Charts</a>
                                     </li>
                                     <li><a href="charts-xcharts.html">xCharts</a>
                                     </li>
                                     <li><a href="charts-flotcharts.html">Flot Charts</a>
                                     </li>
                                     <li><a href="charts-sparklines.html">Sparkline Charts</a>
                                     </li>
                                 </ul>
                             </div>
                         </li>-->
                    </ul>
                </li>
                <!--<li class="li-hover"><div class="divider"></div></li>
                <li class="li-hover"><p class="ultra-small margin more-text">MORE</p></li>
                <li><a href="css-grid.html"><i class="mdi-image-grid-on"></i> Grid</a>
                </li>
                <li><a href="css-color.html"><i class="mdi-editor-format-color-fill"></i> Color</a>
                </li>
                <li><a href="css-helpers.html"><i class="mdi-communication-live-help"></i> Helpers</a>
                </li>
                <li><a href="changelogs.html"><i class="mdi-action-swap-vert-circle"></i> Changelogs</a>
                </li>
                <li class="li-hover"><div class="divider"></div></li>
                <li class="li-hover"><p class="ultra-small margin more-text">Daily Sales</p></li>
                <li class="li-hover">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div class="sample-chart-wrapper">
                                <div class="ct-chart ct-golden-section" id="ct2-chart"></div>
                            </div>
                        </div>
                    </div>
                </li>-->
            </ul>
            <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
        </aside>
        <!-- END LEFT SIDEBAR NAV-->

        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- START CONTENT -->
        <section id="content">

            <!--breadcrumbs start-->
            <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">FACTURAS</h5> <br>
                            <!--<ol class="breadcrumb">
                                <li><a href="index.html">Dashboard</a>
                                </li>
                                <li><a href="#">Pages</a>
                                </li>
                                <li class="active">Invoice</li>
                            </ol>-->
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
                            <div class="col s12 m6 l6">
                                <img src="images/generic-logo.png" alt="company logo">
                                <p>To,
                                    <br/>
                                    <span class="strong">Jonathan Doe</span>
                                    <br/>
                                    <span>125, ABC Street,</span>
                                    <br/>
                                    <span>New Yourk, USA</span>
                                    <br/>
                                    <span>+91-(444)-(333)-(221)</span>
                                </p>
                            </div>

                            <div class="col s12 m6 l6">
                                <div class="invoce-company-address right-align">
                                    <span class="invoice-icon"><i class="mdi-social-location-city cyan-text"></i></span>

                                    <p><span class="strong">Company Name LLC</span>
                                        <br/>
                                        <span>125, ABC Street,</span>
                                        <br/>
                                        <span>New Yourk, USA</span>
                                        <br/>
                                        <span>+91-(444)-(333)-(221)</span>
                                    </p>
                                </div>

                                <div class="invoce-company-contact right-align">
                                    <span class="invoice-icon"><i class="mdi-communication-quick-contacts-mail cyan-text"></i></span>
                                    <p><span class="strong">www.exampledomain.com</span>
                                        <br/>
                                        <span>info@exampledomain.com</span>
                                        <br/>
                                        <span>admin@exampledomain.com</span>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="invoice-lable">
                        <div class="row">
                            <div class="col s12 m3 l3 cyan">
                                <h4 class="white-text invoice-text">INVOICE</h4>
                            </div>
                            <div class="col s12 m9 l9 invoice-brief cyan white-text">
                                <div class="row">
                                    <div class="col s12 m3 l3">
                                        <p class="strong">Total Due</p>
                                        <h4 class="header">$ 3,600.00</h4>
                                    </div>
                                    <div class="col s12 m3 l3">
                                        <p class="strong">Invoice No</p>
                                        <h4 class="header">MT_A_124563</h4>
                                    </div>
                                    <div class="col s12 m3 l3">
                                        <p class="strong">Due Date</p>
                                        <h4 class="header">22.05.2015</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="invoice-table">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <table class="striped">
                                    <thead>
                                    <tr>
                                        <th data-field="no">No</th>
                                        <th data-field="item">Item</th>
                                        <th data-field="uprice">Unit Price</th>
                                        <th data-field="price">Unit</th>
                                        <th data-field="price">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>MacBook Pro</td>
                                        <td>$ 1,299.00</td>
                                        <td>2</td>
                                        <td>$ 1,100.00</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>iMAC</td>
                                        <td>$ 1,099.00</td>
                                        <td>2</td>
                                        <td>$ 2,198.00</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>iPhone</td>
                                        <td>$ 299.00</td>
                                        <td>5</td>
                                        <td>$ 1,495.00</td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>iPad 3</td>
                                        <td>$399.00</td>
                                        <td>1</td>
                                        <td>$ 399.00</td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>iPod</td>
                                        <td>$49.00</td>
                                        <td>2</td>
                                        <td>$ 98.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="white"></td>
                                        <td>Sub Total:</td>
                                        <td>$ 5,290.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="white"></td>
                                        <td>Service Tax</td>
                                        <td>11.00%</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="white"></td>
                                        <td class="cyan white-text">Grand Total</td>
                                        <td class="cyan strong white-text">$ 5,871.90</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                    <div class="invoice-footer">
                        <div class="row">
                            <div class="col s12 m6 l6">
                                <p class="strong">Payment Method</p>
                                <p>Please make the cheque to: AMANDA ORTON</p>
                                <p class="strong">Terms & Condition</p>
                                <ul>
                                    <li>You know, being a test pilot isn't always the healthiest business in the world.</li>
                                    <li>We predict too much for the next year and yet far too little for the next 10.</li>
                                </ul>
                            </div>
                            <div class="col s12 m6 l6 center-align">
                                <p>Approved By</p>
                                <img src="images/signature-scan.png" alt="signature">
                                <p class="header">AMANDA ORTON</p>
                                <p>Managing Director</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--end container-->

        </section>
        <!-- END CONTENT -->

        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START RIGHT SIDEBAR NAV-->
        <aside id="right-sidebar-nav">
            <ul id="chat-out" class="side-nav rightside-navigation">
                <li class="li-hover">
                    <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
                    <div id="right-search" class="row">
                        <form class="col s12">
                            <div class="input-field">
                                <i class="mdi-action-search prefix"></i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Search</label>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="li-hover">
                    <ul class="chat-collapsible" data-collapsible="expandable">
                        <li>
                            <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                            <div class="collapsible-body recent-activity">
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">just now</a>
                                        <p>Jim Doe Purchased new equipments for zonal office.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">Yesterday</a>
                                        <p>Your Next flight for USA will be on 15th August 2015.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">5 Days Ago</a>
                                        <p>Natalya Parker Send you a voice mail for next conference.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">Last Week</a>
                                        <p>Jessy Jay open a new store at S.G Road.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">5 Days Ago</a>
                                        <p>Natalya Parker Send you a voice mail for next conference.</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                            <div class="collapsible-body sales-repoart">
                                <div class="sales-repoart-list  chat-out-list row">
                                    <div class="col s8">Target Salse</div>
                                    <div class="col s4"><span id="sales-line-1"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Payment Due</div>
                                    <div class="col s4"><span id="sales-bar-1"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Total Delivery</div>
                                    <div class="col s4"><span id="sales-line-2"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Total Progress</div>
                                    <div class="col s4"><span id="sales-bar-2"></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                            <div class="collapsible-body favorite-associates">
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Eileen Sideways</p>
                                        <p class="place">Los Angeles, CA</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Zaham Sindil</p>
                                        <p class="place">San Francisco, CA</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Renov Leongal</p>
                                        <p class="place">Cebu City, Philippines</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Weno Carasbong</p>
                                        <p>Tokyo, Japan</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Nusja Nawancali</p>
                                        <p class="place">Bangkok, Thailand</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <!-- LEFT RIGHT SIDEBAR NAV-->

    </div>
    <!-- END WRAPPER -->

</div>
<!-- END MAIN -->



<!-- //////////////////////////////////////////////////////////////////////////// -->