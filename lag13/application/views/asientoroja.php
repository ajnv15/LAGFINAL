<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <div class="col-md-3">
        <label for="disponible" class="label_item">
        <img class="img-responsive" src="<?php echo base_url()."assets/images/roja.png"?>" id="disponible">
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
    <img class="img-responsive" src="<?php echo base_url()."assets/images/roja.png"?>" id="disponible" style="opacity:0.3;">
    <span>Seleccionado</span>
    </label>
  </div>
      </div>
      <div class="modal-body">




          <div class="container">
            <div class="row">

              <?php
              $zone="rj";
              $i=0;
              $letters=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o');

              $fila=1;
               ?>
              <input type="radio" disabled class="radio_item" disabled >
              <label class="label_item" for="radio">
              </label>
              <input type="radio" disabled class="radio_item" disabled >
              <label class="label_item" for="radio">
              </label>
              <input type="radio" disabled class="radio_item" disabled >
              <label class="label_item" for="radio">
              </label>
              <input type="radio" disabled class="radio_item" disabled >
              <label class="label_item" for="radio">
              </label>
              <input type="radio" disabled class="radio_item" disabled >
              <label class="label_item" for="radio">
              </label>
              <input type="radio" disabled class="radio_item" disabled >
              <label class="label_item" for="radio">
              </label>
              <input type="radio" disabled class="radio_item" disabled >
              <label class="label_item" for="radio">
              </label>
              <input type="radio" disabled class="radio_item" disabled >
              <label class="label_item" for="radio">
              </label>
        <?php

         //$zone."/".$letters[$fila-1].$i;



      for($i=4;$i>=1;$i--){

        if (in_array($zone."/".$letters[$fila-1].$i,$asientos)){
        $key = array_search($zone."/".$letters[$fila-1].$i,$asientos);
        unset($asientos[$key]);
        ?>
        <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
        <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
      </label>
        <?php
      }
      else{

    ?>
        <input type="radio" disabled class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].$i;?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].$i;?>" >
        <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>"><img class="img-responsive"src="<?php echo base_url()."assets/images/roja.png"?>">
        </label>
        <?php
       }
     }
  ?>
</div>
</div>

<div class="container">
<div class="row">
  <input type="radio" disabled class="radio_item" disabled >
  <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
  </label>
  <input type="radio" disabled class="radio_item" disabled >
  <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
  </label>
  <input type="radio" disabled class="radio_item" disabled >
  <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
  </label>
  <input type="radio" disabled class="radio_item" disabled >
  <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
  </label>
  <input type="radio" disabled class="radio_item" disabled >
  <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
  </label>
  <input type="radio" disabled class="radio_item" disabled >
  <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
  </label>
  <input type="radio" disabled class="radio_item" disabled >
  <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
  </label>
<?php

//$zone."/".$letters[$fila-1].$i;
  $fila=2;
  for($i=5;$i>=1;$i--){if (in_array($zone."/".$letters[$fila-1].$i,$asientos)){
    $key = array_search($zone."/".$letters[$fila-1].$i,$asientos);
    unset($asientos[$key]);
    ?>
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
    <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
  </label>
    <?php
  }
  else{

?>
    <input type="radio" disabled class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].$i;?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].$i;?>" >
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>"><img class="img-responsive"src="<?php echo base_url()."assets/images/roja.png"?>">
    </label>
    <?php
  }
}
  ?>
  </div>
  </div>
<div class="container">
    <div class="row">
      <input type="radio" disabled class="radio_item" disabled >
      <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
      </label>
      <input type="radio" disabled class="radio_item" disabled >
      <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
      </label>
      <input type="radio" disabled class="radio_item" disabled >
      <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
      </label>
      <input type="radio" disabled class="radio_item" disabled >
      <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
      </label>
      <input type="radio" disabled class="radio_item" disabled >
      <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
      </label>
      <input type="radio" disabled class="radio_item" disabled >
      <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
      </label>
<?php
//$zone."/".$letters[$fila-1].$i;
 $fila=3;
for($i=6;$i>=1;$i--){
  if (in_array($zone."/".$letters[$fila-1].$i,$asientos)){
    $key = array_search($zone."/".$letters[$fila-1].$i,$asientos);
    unset($asientos[$key]);
    ?>
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
    <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
  </label>
    <?php
  }
  else{

?>
<input type="radio" disabled class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].$i;?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].$i;?>" >
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>"><img class="img-responsive"src="<?php echo base_url()."assets/images/roja.png"?>">
    </label>
<?php
}
}
?>
</div>
</div>
<div class="container">
  <div class="row">
    <input type="radio" disabled class="radio_item" disabled >
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
    </label>
    <input type="radio" disabled class="radio_item" disabled >
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
    </label>
    <input type="radio" disabled class="radio_item" disabled >
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
    </label>
    <input type="radio" disabled class="radio_item" disabled >
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
    </label>
    <input type="radio" disabled class="radio_item" disabled >
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
    </label>

<?php
//$zone."/".$letters[$fila-1].$i;
$fila=4;
for($i=7;$i>=1;$i--){
if (in_array($zone."/".$letters[$fila-1].$i,$asientos)){
$key = array_search($zone."/".$letters[$fila-1].$i,$asientos);
unset($asientos[$key]);
?>
<label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
<img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
</label>
<?php
}
else{

?>
  <input type="radio" disabled class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].$i;?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].$i;?>" >
  <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>"><img class="img-responsive"src="<?php echo base_url()."assets/images/roja.png"?>">
  </label>

<?php
}
}
?>
</div>
</div>

<div class="container">
<div class="row">
  <input type="radio" disabled class="radio_item" disabled >
  <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
  </label>
  <input type="radio" disabled class="radio_item" disabled >
  <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
  </label>
  <input type="radio" disabled class="radio_item" disabled >
  <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
  </label>
  <input type="radio" disabled class="radio_item" disabled >
  <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
  </label>
<?php
//$zone."/".$letters[$fila-1].$i;
$fila=5;
for($i=8;$i>=1;$i--){
  if (in_array($zone."/".$letters[$fila-1].$i,$asientos)){
    $key = array_search($zone."/".$letters[$fila-1].$i,$asientos);
    unset($asientos[$key]);
    ?>
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
    <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
  </label>
    <?php
  }
  else{

?>
  <input type="radio" disabled class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].$i;?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].$i;?>" >
  <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>"><img class="img-responsive"src="<?php echo base_url()."assets/images/roja.png"?>">
  </label>
  <?php
}
}
?>
</div>
</div>


<div class="container">
  <div class="row">
    <input type="radio" disabled class="radio_item" disabled >
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
    </label>
    <input type="radio" disabled class="radio_item" disabled >
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
    </label>
    <input type="radio" disabled class="radio_item" disabled >
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
    </label>
    <?php
//$zone."/".$letters[$fila-1].$i;
    $fila=6;
    for($i=9;$i>=1;$i--){
      if (in_array($zone."/".$letters[$fila-1].$i,$asientos)){
        $key = array_search($zone."/".$letters[$fila-1].$i,$asientos);
        unset($asientos[$key]);
        ?>
        <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
        <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
      </label>
        <?php
      }
      else{

    ?>
    <input type="radio" disabled class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].$i;?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].$i;?>" >
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>"><img class="img-responsive"src="<?php echo base_url()."assets/images/roja.png"?>">
    </label>

  <?php
    }
  }
  ?>
  </div>
  </div>

  <div class="container">
    <div class="row">
      <input type="radio" disabled class="radio_item" disabled >
      <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
      </label>
      <input type="radio" disabled class="radio_item" disabled >
      <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
      </label>
      <?php
    //$zone."/".$letters[$fila-1].$i;
      $fila=7;
      for($i=10;$i>=1;$i--){    if (in_array($zone."/".$letters[$fila-1].$i,$asientos)){
            $key = array_search($zone."/".$letters[$fila-1].$i,$asientos);
            unset($asientos[$key]);
            ?>
            <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
            <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
          </label>
            <?php
          }
          else{

        ?>
        <input type="radio" disabled class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].$i;?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].$i;?>" >
        <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>"><img class="img-responsive"src="<?php echo base_url()."assets/images/roja.png"?>">
        </label>
      <?php
    }
      }
      ?>
      </div>
      </div>

      <div class="container">
        <div class="row">
          <input type="radio" disabled class="radio_item" disabled >
          <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
          </label>

        <?php
//$zone."/".$letters[$fila-1].$i;
        $fila=8;
        for($i=11;$i>=1;$i--){
          if (in_array($zone."/".$letters[$fila-1].$i,$asientos)){
            $key = array_search($zone."/".$letters[$fila-1].$i,$asientos);
            unset($asientos[$key]);
            ?>
            <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
            <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
          </label>
            <?php
          }
          else{

        ?>
          <input type="radio" disabled class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].$i;?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].$i;?>" >
          <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>"><img class="img-responsive"src="<?php echo base_url()."assets/images/roja.png"?>">
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
          //$zone."/".$letters[$fila-1].$i;
          $fila=9;
          for($i=12;$i>=1;$i--){
            if (in_array($zone."/".$letters[$fila-1].$i,$asientos)){
              $key = array_search($zone."/".$letters[$fila-1].$i,$asientos);
              unset($asientos[$key]);
              ?>
              <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
              <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
            </label>
              <?php
            }
            else{

          ?>
            <input type="radio" disabled class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].$i;?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].$i;?>" >
            <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>"><img class="img-responsive"src="<?php echo base_url()."assets/images/roja.png"?>">
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
          //$zone."/".$letters[$fila-1].$i;
          $fila=10;
            for($i=12;$i>=1;$i--){
              if (in_array($zone."/".$letters[$fila-1].$i,$asientos)){
                $key = array_search($zone."/".$letters[$fila-1].$i,$asientos);
                unset($asientos[$key]);
                ?>
                <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
                <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
              </label>
                <?php
              }
              else{

            ?>
              <input type="radio" disabled class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].$i;?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].$i;?>" >
              <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>"><img class="img-responsive"src="<?php echo base_url()."assets/images/roja.png"?>">
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
            //$zone."/".$letters[$fila-1].$i;
              $fila=11;
              for($i=12;$i>=1;$i--){
                if (in_array($zone."/".$letters[$fila-1].$i,$asientos)){
                  $key = array_search($zone."/".$letters[$fila-1].$i,$asientos);
                  unset($asientos[$key]);
                  ?>
                  <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
                  <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
                </label>
                  <?php
                }
                else{

              ?>
                <input type="radio" disabled class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].$i;?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].$i;?>" >
                <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>"><img class="img-responsive"src="<?php echo base_url()."assets/images/roja.png"?>">
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
                  <input type="radio" disabled class="radio_item" disabled >
                  <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
                  </label>
                  <?php
                    //$zone."/".$letters[$fila-1].$i;
                    $fila=12;
                      for($i=11;$i>=1;$i--){
                        if (in_array($zone."/".$letters[$fila-1].$i,$asientos)){
                          $key = array_search($zone."/".$letters[$fila-1].$i,$asientos);
                          unset($asientos[$key]);
                          ?>
                          <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
                          <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
                        </label>
                          <?php
                        }
                        else{

                      ?>
                      <input type="radio" disabled class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].$i;?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].$i;?>" >
                      <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>"><img class="img-responsive"src="<?php echo base_url()."assets/images/roja.png"?>">
                      </label>
                  <?php
                }
                }
                ?>
                </div>
                </div>

                <div class="container">
                  <div class="row">
                    <input type="radio" disabled class="radio_item" disabled >
                    <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
                    </label>
                    <input type="radio" disabled class="radio_item" disabled >
                    <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
                    </label>
                    <?php
                      //$zone."/".$letters[$fila-1].$i;
                      $fila=13;
                        for($i=10;$i>=1;$i--){
                          if (in_array($zone."/".$letters[$fila-1].$i,$asientos)){
                            $key = array_search($zone."/".$letters[$fila-1].$i,$asientos);
                            unset($asientos[$key]);
                            ?>
                            <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
                            <img class="img-responsive"src="<?php echo base_url()."assets/images/taken.png"?>">
                          </label>
                            <?php
                          }
                          else{

                        ?>
                        <input type="radio" disabled class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].$i;?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].$i;?>" >
                        <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>"><img class="img-responsive"src="<?php echo base_url()."assets/images/roja.png"?>">
                        </label>
                    <?php
                  }
                  }
                  ?>
                  </div>
                  </div>

                  <div class="container">
                    <div class="row">
                      <input type="radio" disabled class="radio_item" disabled >
                      <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
                      </label>
                      <input type="radio" disabled class="radio_item" disabled >
                      <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
                      </label>
                      <input type="radio" disabled class="radio_item" disabled >
                      <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
                      </label>
                      <?php
                        //$zone."/".$letters[$fila-1].$i;
                        $fila=14;
                          for($i=9;$i>=1;$i--){?>
                          <input type="radio" disabled class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].$i;?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].$i;?>" >
                          <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>"><img class="img-responsive"src="<?php echo base_url()."assets/images/roja.png"?>">
                          </label>
                      <?php
                    }
                    ?>
                    </div>
                    </div>

                    <div class="container">
                      <div class="row">
                        <input type="radio" disabled class="radio_item" disabled >
                        <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
                        </label>
                        <input type="radio" disabled class="radio_item" disabled >
                        <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
                        </label>
                        <input type="radio" disabled class="radio_item" disabled >
                        <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
                        </label>
                        <input type="radio" disabled class="radio_item" disabled >
                        <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>">
                        </label>
                        <?php
                          //$zone."/".$letters[$fila-1].$i;
                          $fila=15;
                            for($i=8;$i>=1;$i--){?>
                            <input type="radio" disabled class="radio_item" id="radio<?php echo $zone."/".$letters[$fila-1].$i;?>" name="roja" value="<?php echo $zone."/".$letters[$fila-1].$i;?>" >
                            <label class="label_item" for="radio<?php echo $zone."/".$letters[$fila-1].$i;?>"><img class="img-responsive"src="<?php echo base_url()."assets/images/roja.png"?>">
                            </label>
                        <?php
                      }
                      ?>
                      </div>
                      </div>
      </div>
      <div class="modal-footer">



      </div>
    </div>

  </div>
</div>
