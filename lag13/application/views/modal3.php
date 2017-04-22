  <!-- Modal -->
  <div id="myModal4" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <div class="col-md-3">
          <label for="disponible" class="label_item">
          <img class="img-responsive" src="<?php echo base_url()."assets/images/blanca.png"?>" id="disponible">
          <span>Disponible</span>
          </label>
        </div>
        <div class="col-md-3">

          <label for="ocupado" class="label_item">
          <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>" id="ocupado">
          <span>Ocupado</span>
        </label>
      </div>

      <div class="col-md-3">
      <label for="disponible" class="label_item">
      <img class="img-responsive" src="<?php echo base_url()."assets/images/blanca.png"?>" id="disponible" style="opacity:0.3;">
      <span>Seleccionado</span>
      </label>
    </div>
        </div>
        <div class="modal-body">
            <div class="container">
              <div class="row">
          <?php

           //$zone."/".$letters[$fila-1].($i+1);

          $zone="bca";
          $i=0;
          $letters=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o');
          $fila=1;

        for($i=0;$i<=3;$i++){
          if (in_array($zone."/".$letters[$fila-1].($i+1),$asientos)){
          $key = array_search($zone."/".$letters[$fila-1].($i+1),$asientos);
          unset($asientos[$key]);
          ?>
          <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>">
          <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
        </label>
          <?php

        }else{?>


          <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].($i+1);?>" >
          <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>"><?php $letters[$fila-1].$i;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
          </label>
          <?php
        }
       }
    ?>
  </div>
</div>

<div class="container">
  <div class="row">
<?php

//$zone."/".$letters[$fila-1].($i+1);
    $fila=2;
    for($i=0;$i<=4;$i++){

      if (in_array($zone."/".$letters[$fila-1].($i+1),$asientos)){
      $key = array_search($zone."/".$letters[$fila-1].($i+1),$asientos);
      unset($asientos[$key]);
      ?>
      <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>">
      <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
    </label>
      <?php

    }else{?>

      <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].($i+1);?>" >
      <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>"><?php $letters[$fila-1].$i;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
      </label>
      <?php
    }
    }
    ?>
    </div>
    </div>
  <div class="container">
      <div class="row">
  <?php
//$zone."/".$letters[$fila-1].($i+1);
   $fila=3;
  for($i=0;$i<=5;$i++){
    if (in_array($zone."/".$letters[$fila-1].($i+1),$asientos)){
    $key = array_search($zone."/".$letters[$fila-1].($i+1),$asientos);
    unset($asientos[$key]);
    ?>
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>">
    <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
  </label>
    <?php

  }else{?>

  <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].($i+1);?>" >
      <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>"><?php $letters[$fila-1].$i;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
      </label>
  <?php
    }
  }
  ?>
  </div>
  </div>
  <div class="container">
    <div class="row">

<?php
 //$zone."/".$letters[$fila-1].($i+1);
$fila=4;
for($i=0;$i<=6;$i++){

  if (in_array($zone."/".$letters[$fila-1].($i+1),$asientos)){
  $key = array_search($zone."/".$letters[$fila-1].($i+1),$asientos);
  unset($asientos[$key]);
  ?>
  <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>">
  <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
</label>
  <?php

}else{?>
    <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].($i+1);?>" >
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>"><?php $letters[$fila-1].$i;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
    </label>

    <?php
      }
    }
    ?>
</div>
</div>

<div class="container">
  <div class="row">
  <?php
//$zone."/".$letters[$fila-1].($i+1);
$fila=5;
  for($i=0;$i<=7;$i++){
    if (in_array($zone."/".$letters[$fila-1].($i+1),$asientos)){
    $key = array_search($zone."/".$letters[$fila-1].($i+1),$asientos);
    unset($asientos[$key]);
    ?>
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>">
    <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
  </label>
    <?php

  }else{?>
    <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].($i+1);?>" >
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>"><?php $letters[$fila-1].$i;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
    </label>
    <?php
        }
      }
  ?>
  </div>
  </div>


  <div class="container">
    <div class="row">
      <?php
  //$zone."/".$letters[$fila-1].($i+1);
      $fila=6;
      for($i=0;$i<=8;$i++){
        if (in_array($zone."/".$letters[$fila-1].($i+1),$asientos)){
        $key = array_search($zone."/".$letters[$fila-1].($i+1),$asientos);
        unset($asientos[$key]);
        ?>
        <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>">
        <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
      </label>
        <?php

      }else{?>

      <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].($i+1);?>" >
      <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>"><?php $letters[$fila-1].$i;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
      </label>

    <?php
      }
    }
    ?>
    </div>
    </div>

    <div class="container">
      <div class="row">
      <?php
      //$zone."/".$letters[$fila-1].($i+1);
        $fila=7;
        for($i=0;$i<=9;$i++){
          if (in_array($zone."/".$letters[$fila-1].($i+1),$asientos)){
          $key = array_search($zone."/".$letters[$fila-1].($i+1),$asientos);
          unset($asientos[$key]);
          ?>
          <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>">
          <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
        </label>
          <?php

        }else{?>
          <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].($i+1);?>" >
          <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>"><?php $letters[$fila-1].$i;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
          </label>
        <?php
      }
        }
        ?>
        </div>
        </div>

        <div class="container">
          <div class="row">
          <?php
  //$zone."/".$letters[$fila-1].($i+1);
          $fila=8;
          for($i=0;$i<=10;$i++){
            if (in_array($zone."/".$letters[$fila-1].($i+1),$asientos)){
            $key = array_search($zone."/".$letters[$fila-1].($i+1),$asientos);
            unset($asientos[$key]);
            ?>
            <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>">
            <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
          </label>
            <?php

          }else{?>
            <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].($i+1);?>" >
            <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>"><?php $letters[$fila-1].$i;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
            </label>
            <?php
          }
          }
          ?>
          </div>
          </div>

          <div class="container">
            <div class="row">
              <?php
            //$zone."/".$letters[$fila-1].($i+1);
            $fila=9;
            for($i=0;$i<=11;$i++){
              if (in_array($zone."/".$letters[$fila-1].($i+1),$asientos)){
              $key = array_search($zone."/".$letters[$fila-1].($i+1),$asientos);
              unset($asientos[$key]);
              ?>
              <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>">
              <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
            </label>
              <?php

            }else{?>
              <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].($i+1);?>" >
              <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>"><?php $letters[$fila-1].$i;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
              </label>
              <?php
            }
          }
            ?>
            </div>
            </div>

              <div class="container">
              <div class="row">
                <?php
            //$zone."/".$letters[$fila-1].($i+1);
            $fila=10;
              for($i=0;$i<=11;$i++){
                if (in_array($zone."/".$letters[$fila-1].($i+1),$asientos)){
                $key = array_search($zone."/".$letters[$fila-1].($i+1),$asientos);
                unset($asientos[$key]);
                ?>
                <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>">
                <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
              </label>
                <?php

              }else{?>
                <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].($i+1);?>" >
                <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>"><?php $letters[$fila-1].$i;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
                </label>

              <?php
            }
              }
              ?>
              </div>
              </div>


              <div class="container">
                <div class="row">
                <?php
              //$zone."/".$letters[$fila-1].($i+1);
                $fila=11;
                for($i=0;$i<=11;$i++){
                  if (in_array($zone."/".$letters[$fila-1].($i+1),$asientos)){
                  $key = array_search($zone."/".$letters[$fila-1].($i+1),$asientos);
                  unset($asientos[$key]);
                  ?>
                  <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>">
                  <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
                </label>
                  <?php

                }else{?>
                  <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].($i+1);?>" >
                  <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>"><?php $letters[$fila-1].$i;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
                  </label>
                <?php
                }
              }
                ?>
                </div>
                </div>

<!--Empieza reflejo-->
                <div class="container">
                  <div class="row">
                    <?php
                      //$zone."/".$letters[$fila-1].($i+1);
                      $fila=12;
                        for($i=0;$i<11;$i++){
                          if (in_array($zone."/".$letters[$fila-1].($i+1),$asientos)){
                          $key = array_search($zone."/".$letters[$fila-1].($i+1),$asientos);
                          unset($asientos[$key]);
                          ?>
                          <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>">
                          <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
                        </label>
                          <?php

                        }else{?>
                        <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].($i+1);?>" >
                        <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>"><?php $letters[$fila-1].$i;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
                        </label>
                    <?php
                  }
                  }
                  ?>
                  </div>
                  </div>

                  <div class="container">
                    <div class="row">
                      <?php
                        //$zone."/".$letters[$fila-1].($i+1);
                        $fila=13;
                          for($i=0;$i<10;$i++){
                            if (in_array($zone."/".$letters[$fila-1].($i+1),$asientos)){
                            $key = array_search($zone."/".$letters[$fila-1].($i+1),$asientos);
                            unset($asientos[$key]);
                            ?>
                            <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>">
                            <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
                          </label>
                            <?php

                          }else{?>
                          <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].($i+1);?>" >
                          <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>"><?php $letters[$fila-1].$i;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
                          </label>
                      <?php
                    }
                    }
                    ?>
                    </div>
                    </div>

                    <div class="container">
                      <div class="row">
                        <?php
                          //$zone."/".$letters[$fila-1].($i+1);
                          $fila=14;
                            for($i=0;$i<9;$i++){
                              if (in_array($zone."/".$letters[$fila-1].($i+1),$asientos)){
                              $key = array_search($zone."/".$letters[$fila-1].($i+1),$asientos);
                              unset($asientos[$key]);
                              ?>
                              <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>">
                              <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
                            </label>
                              <?php

                            }else{?>
                            <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].($i+1);?>" >
                            <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>"><?php $letters[$fila-1].$i;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
                            </label>
                        <?php
                      }
                      }
                      ?>
                      </div>
                      </div>

                      <div class="container">
                        <div class="row">
                          <?php
                            //$zone."/".$letters[$fila-1].($i+1);
                            $fila=15;
                              for($i=0;$i<8;$i++){
                                if (in_array($zone."/".$letters[$fila-1].($i+1),$asientos)){
                                $key = array_search($zone."/".$letters[$fila-1].($i+1),$asientos);
                                unset($asientos[$key]);
                                ?>
                                <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>">
                                <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
                              </label>
                                <?php

                              }else{?>
                              <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].($i+1);?>" >
                              <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].($i+1);?>"><?php $letters[$fila-1].$i;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
                              </label>
                          <?php
                          }
                        }
                        ?>
                        </div>
                        </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" >Aceptar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>

    </div>
  </div>
