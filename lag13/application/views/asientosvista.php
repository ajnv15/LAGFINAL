
      <div class="tab-pane fade"  id="asientos">
        <div class="modalfade" id="vistaAsiento">
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-xl-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-0 col-xl-offset-2">
            <div class="panel animated fadeInDown">
              <div class="modal-header">
                <h3 class="modal-title">Tu asiento es:</h3>
              </div>
              <div class="modal-body">

                <?php if(isset($numero)){?>
                  <div class="row">
                    <?php

                    $dato=explode("/",$numero);
                    if($dato[0]=="pr"){
                      $zona="morada";
                    }
                    if($dato[0]=="bca"){
                      $zona="blanca";
                    }
                    if($dato[0]=="vr"){
                      $zona="verde";
                    }
                    if($dato[0]=="rj"){
                      $zona="roja";
                    }

                    ?>
                  </div>
                  <?php } ?>

                  <div class="row">
                    <div class="col-lg-6 col-md-16 col-sm-6 col-xs-6 col-xl-6 col-lg-offset-3
                    col-md-offset-3 col-sm-offset-3 col-xs-offset-3">
                      <img class="img-responsive" src="<?php echo base_url()."assets/images/escenario.png";?>">

                  </div>
                </div>


                  </div>
                  <div class="modal-footer">
                    <div class="row">
                      <div class="col-lg-7 col-md-6 col-sm-6 col-lg-offset-5 col-md-offset-5 col-sm-offset-5 col-xs-offset-5" >
                        <img class="img-responsive" src="<?php echo base_url()."assets/images/".$zona.".png";?>">

                    </div>
                  </div>
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xl-6">
                        <h4><strong>    <?php echo strtoupper($dato[1]);?></strong></h4>
                    </div>

                    </div>
              </div>


            </div>
          </div>
        </div>
    </div>
