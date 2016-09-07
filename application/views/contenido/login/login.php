<body class="blue">
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->



<div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">

        <form class="login-form" method="post" action="<?php echo base_url('index.php/login')?>">
            <div class="row">
                <div class="input-field col s12 center">
                    <img src="<?PHP echo base_url();?>assets/img/user.jpg" alt="" class="circle responsive-img valign profile-image-login">
                    <p class="center login-form-text negra">SALES UNIMARK S.A</p>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                   <!-- <i class="mdi-social-person-outline prefix"></i>-->
                    <input id="username" type="text" name="txtUsuario">
                    <label for="username" class="center-align">USUARIO:</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <!--<i class="mdi-action-lock-outline prefix"></i>-->
                    <input id="password" type="password" name="txtpassword">
                    <label for="password">CONTRASEÑA:</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light col s12" type="submit" name="action">ENTRAR</button>
                </div>
            </div>

        </form>
    </div>
</div>
