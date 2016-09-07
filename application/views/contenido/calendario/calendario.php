<section id="content">
        
  <div id="breadcrumbs-wrapper">
    <div class="container">
      <div class="row">
        <div class="col s12 m12 l12">
          <h5 class="center negra breadcrumbs-title">CALENDARIO</h5> <br>
        </div>
      </div>
    </div>
  </div><!--breadcrumbs end-->        

        <!--start container-->
        <div class="container">
          <div class="section">
            <div class="divider"></div>
             <div class="progress"  style="display:none">
                  <div class="indeterminate blue"></div>
              </div>
            <div id="full-calendar">              
              <div class="row">
               <div class="col s12 m6 l3">
                  <div class="card-panel" id="cardRutas">                    
                    <div class="row">
                      <form class="col s12 l12">
                        <div class="row">
                        <div class="input-field col s12 l12">
                          <select class="regular" id="selectRuta">
                            <option value="" disabled selected>Seleccione la ruta...</option>
                            <?php 
                            if (!($ruta)) {}
                            else{
                              foreach ($ruta as $key) {
                                echo "<option value=".$key['CodVendedor'].">".$key['CodVendedor']."</option>";
                              }                               
                            }
                            ?>
                          </select>
                          </div>
                        </div>                       
                      </form>
                    </div>
                  </div>
                </div>
                  <div class="col s12 m8 l9">
                  <div id='calendario'></div>
                </div>
              </div>
            </div>
            </div>
        </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->

