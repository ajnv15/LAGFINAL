  <!-- Modal -->
  <div id="myModal4" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
            <div class="container">
              <div class="row">
          <?php

           //$zone."/".$letters[$i].$fila;

          $zone="bca";
          $i=0;
          $letters=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o');
          $fila=1;

        for($i=0;$i<=3;$i++){
          if (in_array($zone."/".$letters[$i].$fila,$asientos)){
          $key = array_search($zone."/".$letters[$i].$fila,$asientos);
          unset($asientos[$key]);
          ?>
          <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>">
          <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
        </label>
          <?php

        }else{?>


          <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$i].$fila;?>" name="roja" value="<?php echo $zone."/".$letters[$i].$fila;?>" >
          <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
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

//$zone."/".$letters[$i].$fila;
    $fila=2;
    for($i=0;$i<=4;$i++){

      if (in_array($zone."/".$letters[$i].$fila,$asientos)){
      $key = array_search($zone."/".$letters[$i].$fila,$asientos);
      unset($asientos[$key]);
      ?>
      <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>">
      <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
    </label>
      <?php

    }else{?>

      <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$i].$fila;?>" name="roja" value="<?php echo $zone."/".$letters[$i].$fila;?>" >
      <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
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
//$zone."/".$letters[$i].$fila;
   $fila=3;
  for($i=0;$i<=5;$i++){
    if (in_array($zone."/".$letters[$i].$fila,$asientos)){
    $key = array_search($zone."/".$letters[$i].$fila,$asientos);
    unset($asientos[$key]);
    ?>
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>">
    <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
  </label>
    <?php

  }else{?>

  <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$i].$fila;?>" name="roja" value="<?php echo $zone."/".$letters[$i].$fila;?>" >
      <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
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
 //$zone."/".$letters[$i].$fila;
$fila=4;
for($i=0;$i<=6;$i++){

  if (in_array($zone."/".$letters[$i].$fila,$asientos)){
  $key = array_search($zone."/".$letters[$i].$fila,$asientos);
  unset($asientos[$key]);
  ?>
  <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>">
  <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
</label>
  <?php

}else{?>
    <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$i].$fila;?>" name="roja" value="<?php echo $zone."/".$letters[$i].$fila;?>" >
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
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
//$zone."/".$letters[$i].$fila;
$fila=5;
  for($i=0;$i<=7;$i++){
    if (in_array($zone."/".$letters[$i].$fila,$asientos)){
    $key = array_search($zone."/".$letters[$i].$fila,$asientos);
    unset($asientos[$key]);
    ?>
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>">
    <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
  </label>
    <?php

  }else{?>
    <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$i].$fila;?>" name="roja" value="<?php echo $zone."/".$letters[$i].$fila;?>" >
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
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
  //$zone."/".$letters[$i].$fila;
      $fila=6;
      for($i=0;$i<=8;$i++){
        if (in_array($zone."/".$letters[$i].$fila,$asientos)){
        $key = array_search($zone."/".$letters[$i].$fila,$asientos);
        unset($asientos[$key]);
        ?>
        <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>">
        <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
      </label>
        <?php

      }else{?>

      <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$i].$fila;?>" name="roja" value="<?php echo $zone."/".$letters[$i].$fila;?>" >
      <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
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
      //$zone."/".$letters[$i].$fila;
        $fila=7;
        for($i=0;$i<=9;$i++){
          if (in_array($zone."/".$letters[$i].$fila,$asientos)){
          $key = array_search($zone."/".$letters[$i].$fila,$asientos);
          unset($asientos[$key]);
          ?>
          <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>">
          <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
        </label>
          <?php

        }else{?>
          <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$i].$fila;?>" name="roja" value="<?php echo $zone."/".$letters[$i].$fila;?>" >
          <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
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
  //$zone."/".$letters[$i].$fila;
          $fila=8;
          for($i=0;$i<=10;$i++){
            if (in_array($zone."/".$letters[$i].$fila,$asientos)){
            $key = array_search($zone."/".$letters[$i].$fila,$asientos);
            unset($asientos[$key]);
            ?>
            <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>">
            <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
          </label>
            <?php

          }else{?>
            <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$i].$fila;?>" name="roja" value="<?php echo $zone."/".$letters[$i].$fila;?>" >
            <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
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
            //$zone."/".$letters[$i].$fila;
            $fila=9;
            for($i=0;$i<=11;$i++){
              if (in_array($zone."/".$letters[$i].$fila,$asientos)){
              $key = array_search($zone."/".$letters[$i].$fila,$asientos);
              unset($asientos[$key]);
              ?>
              <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>">
              <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
            </label>
              <?php

            }else{?>
              <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$i].$fila;?>" name="roja" value="<?php echo $zone."/".$letters[$i].$fila;?>" >
              <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
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
            //$zone."/".$letters[$i].$fila;
            $fila=10;
              for($i=0;$i<=11;$i++){
                if (in_array($zone."/".$letters[$i].$fila,$asientos)){
                $key = array_search($zone."/".$letters[$i].$fila,$asientos);
                unset($asientos[$key]);
                ?>
                <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>">
                <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
              </label>
                <?php

              }else{?>
                <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$i].$fila;?>" name="roja" value="<?php echo $zone."/".$letters[$i].$fila;?>" >
                <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
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
              //$zone."/".$letters[$i].$fila;
                $fila=11;
                for($i=0;$i<=11;$i++){
                  if (in_array($zone."/".$letters[$i].$fila,$asientos)){
                  $key = array_search($zone."/".$letters[$i].$fila,$asientos);
                  unset($asientos[$key]);
                  ?>
                  <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>">
                  <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
                </label>
                  <?php

                }else{?>
                  <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$i].$fila;?>" name="roja" value="<?php echo $zone."/".$letters[$i].$fila;?>" >
                  <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
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
                      //$zone."/".$letters[$i].$fila;
                      $fila=12;
                        for($i=0;$i<11;$i++){
                          if (in_array($zone."/".$letters[$i].$fila,$asientos)){
                          $key = array_search($zone."/".$letters[$i].$fila,$asientos);
                          unset($asientos[$key]);
                          ?>
                          <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>">
                          <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
                        </label>
                          <?php

                        }else{?>
                        <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$i].$fila;?>" name="roja" value="<?php echo $zone."/".$letters[$i].$fila;?>" >
                        <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
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
                        //$zone."/".$letters[$i].$fila;
                        $fila=13;
                          for($i=0;$i<10;$i++){
                            if (in_array($zone."/".$letters[$i].$fila,$asientos)){
                            $key = array_search($zone."/".$letters[$i].$fila,$asientos);
                            unset($asientos[$key]);
                            ?>
                            <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>">
                            <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
                          </label>
                            <?php

                          }else{?>
                          <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$i].$fila;?>" name="roja" value="<?php echo $zone."/".$letters[$i].$fila;?>" >
                          <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
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
                          //$zone."/".$letters[$i].$fila;
                          $fila=14;
                            for($i=0;$i<9;$i++){
                              if (in_array($zone."/".$letters[$i].$fila,$asientos)){
                              $key = array_search($zone."/".$letters[$i].$fila,$asientos);
                              unset($asientos[$key]);
                              ?>
                              <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>">
                              <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
                            </label>
                              <?php

                            }else{?>
                            <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$i].$fila;?>" name="roja" value="<?php echo $zone."/".$letters[$i].$fila;?>" >
                            <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
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
                            //$zone."/".$letters[$i].$fila;
                            $fila=15;
                              for($i=0;$i<8;$i++){
                                if (in_array($zone."/".$letters[$i].$fila,$asientos)){
                                $key = array_search($zone."/".$letters[$i].$fila,$asientos);
                                unset($asientos[$key]);
                                ?>
                                <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>">
                                <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
                              </label>
                                <?php

                              }else{?>
                              <input type="radio" class="radio_item" id="radio<?php echo $zone."/".$letters[$i].$fila;?>" name="roja" value="<?php echo $zone."/".$letters[$i].$fila;?>" >
                              <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/blanca.png"?>">
                              </label>
                          <?php
                          }
                        }
                        ?>
                        </div>
                        </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-default" >Accept</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>
      </div>

    </div>
  </div>
