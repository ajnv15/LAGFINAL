  <!-- Modal -->
  <div id="myModal3" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <div class="col-md-3">
          <label for="disponible" class="label_item">
          <img class="img-responsive" src="<?php echo base_url()."assets/images/verde.png"?>" id="disponible">
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
      <img class="img-responsive" src="<?php echo base_url()."assets/images/verde.png"?>" id="disponible" style="opacity:0.3;">
      <span>Seleccionado</span>
      </label>
    </div>
        </div>
        <div class="modal-body">


            <div class="container">
              <div class="row">
          <?php

           //$zone."/".$letters[$i].$fila;

          $zone="vr";
          $i=0;
          $letters=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o');
          $fila=1;

        for($i=0;$i<=14;$i++){
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
          <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/verde.png"?>">
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

    for($i=0;$i<=14;$i++){
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
      <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/verde.png"?>">
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

  for($i=0;$i<=14;$i++){
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
      <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/verde.png"?>">
      </label>



      <?php
          }
        }
      ?>
  </div>
  </div>



  <div class="container">
    <div class="row">
      <input type="radio" class="radio_item" disabled >
      <label class="label_item" for="radio">
      </label>
<?php

 //$zone."/".$letters[$i].$fila;


$fila=4;

for($i=0;$i<=13;$i++){
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
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/verde.png"?>">
    </label>



    <?php
      }
    }
    ?>
</div>
</div>



<div class="container">
  <div class="row">
    <input type="radio" class="radio_item" disabled >
    <label class="label_item" for="radio">
    </label>
    <input type="radio" class="radio_item" disabled >
    <label class="label_item" for="radio">
    </label>
    <input type="radio" class="radio_item" disabled >
    <label class="label_item" for="radio">
    </label>

<?php

//$zone."/".$letters[$i].$fila;


  $fila=5;

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
    <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/verde.png"?>">
    </label>



  <?php
    }
  }
  ?>
  </div>
  </div>


  <div class="container">
    <div class="row">
      <input type="radio" class="radio_item" disabled >
      <label class="label_item" for="radio">
      </label>
      <input type="radio" class="radio_item" disabled >
      <label class="label_item" for="radio">
      </label>
      <input type="radio" class="radio_item" disabled >
      <label class="label_item" for="radio">
      </label>
      <input type="radio" class="radio_item" disabled >
      <label class="label_item" for="radio">
      </label>
  <?php

  //$zone."/".$letters[$i].$fila;


    $fila=6;

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
      <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/verde.png"?>">
      </label>



    <?php
    }
  }
    ?>
    </div>
    </div>

    <div class="container">
      <div class="row">
        <input type="radio" class="radio_item" disabled >
        <label class="label_item" for="radio">
        </label>
        <input type="radio" class="radio_item" disabled >
        <label class="label_item" for="radio">
        </label>
        <input type="radio" class="radio_item" disabled >
        <label class="label_item" for="radio">
        </label>
        <input type="radio" class="radio_item" disabled >
        <label class="label_item" for="radio">
        </label>
        <input type="radio" class="radio_item" disabled >
        <label class="label_item" for="radio">
        </label>


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
        <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/verde.png"?>">
        </label>



      <?php
        }
      }
      ?>
      </div>
      </div>



      <div class="container">
        <div class="row">
          <input type="radio" class="radio_item" disabled >
          <label class="label_item" for="radio">
          </label>
          <input type="radio" class="radio_item" disabled >
          <label class="label_item" for="radio">
          </label>
          <input type="radio" class="radio_item" disabled >
          <label class="label_item" for="radio">
          </label>
          <input type="radio" class="radio_item" disabled >
          <label class="label_item" for="radio">
          </label>
          <input type="radio" class="radio_item" disabled >
          <label class="label_item" for="radio">
          </label>
          <input type="radio" class="radio_item" disabled >
          <label class="label_item" for="radio">
          </label>
      <?php

      //$zone."/".$letters[$i].$fila;


        $fila=8;

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
          <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/verde.png"?>">
          </label>



        <?php
        }
      }
        ?>
        </div>
        </div>





        <div class="container">
          <div class="row">
            <input type="radio" class="radio_item" disabled >
            <label class="label_item" for="radio">
            </label>
            <input type="radio" class="radio_item" disabled >
            <label class="label_item" for="radio">
            </label>
            <input type="radio" class="radio_item" disabled >
            <label class="label_item" for="radio">
            </label>
            <input type="radio" class="radio_item" disabled >
            <label class="label_item" for="radio">
            </label>
            <input type="radio" class="radio_item" disabled >
            <label class="label_item" for="radio">
            </label>
            <input type="radio" class="radio_item" disabled >
            <label class="label_item" for="radio">
            </label>
            <input type="radio" class="radio_item" disabled >
            <label class="label_item" for="radio">
            </label>
        <?php

        //$zone."/".$letters[$i].$fila;


          $fila=9;

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
            <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/verde.png"?>">
            </label>



          <?php
          }
        }
          ?>
          </div>
          </div>

          <div class="container">
            <div class="row">
              <input type="radio" class="radio_item" disabled >
              <label class="label_item" for="radio">
              </label>
              <input type="radio" class="radio_item" disabled >
              <label class="label_item" for="radio">
              </label>
              <input type="radio" class="radio_item" disabled >
              <label class="label_item" for="radio">
              </label>
              <input type="radio" class="radio_item" disabled >
              <label class="label_item" for="radio">
              </label>
              <input type="radio" class="radio_item" disabled >
              <label class="label_item" for="radio">
              </label>
              <input type="radio" class="radio_item" disabled >
              <label class="label_item" for="radio">
              </label>
              <input type="radio" class="radio_item" disabled >
              <label class="label_item" for="radio">
              </label>
              <input type="radio" class="radio_item" disabled >
              <label class="label_item" for="radio">
              </label>
          <?php

          //$zone."/".$letters[$i].$fila;


            $fila=10;

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
              <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/verde.png"?>">
              </label>



            <?php
            }
          }
            ?>
            </div>
            </div>



            <div class="container">
              <div class="row">


                <input type="radio" class="radio_item" disabled >
                <label class="label_item" for="radio">
                </label>
                <input type="radio" class="radio_item" disabled >
                <label class="label_item" for="radio">
                </label>
                <input type="radio" class="radio_item" disabled >
                <label class="label_item" for="radio">
                </label>
                <input type="radio" class="radio_item" disabled >
                <label class="label_item" for="radio">
                </label>
                <input type="radio" class="radio_item" disabled >
                <label class="label_item" for="radio">
                </label>
                <input type="radio" class="radio_item" disabled >
                <label class="label_item" for="radio">
                </label>
                <input type="radio" class="radio_item" disabled >
                <label class="label_item" for="radio">
                </label>
                <input type="radio" class="radio_item" disabled >
                <label class="label_item" for="radio">
                </label>
                <input type="radio" class="radio_item" disabled >
                <label class="label_item" for="radio">
                </label>
            <?php

            //$zone."/".$letters[$i].$fila;


              $fila=11;

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
                <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/verde.png"?>">
                </label>



              <?php
            }
              }
              ?>
              </div>
              </div>


              <div class="container">
                <div class="row">
                  <input type="radio" class="radio_item" disabled >
                  <label class="label_item" for="radio">
                  </label>
                  <input type="radio" class="radio_item" disabled >
                  <label class="label_item" for="radio">
                  </label>
                  <input type="radio" class="radio_item" disabled >
                  <label class="label_item" for="radio">
                  </label>
                  <input type="radio" class="radio_item" disabled >
                  <label class="label_item" for="radio">
                  </label>
                  <input type="radio" class="radio_item" disabled >
                  <label class="label_item" for="radio">
                  </label>
                  <input type="radio" class="radio_item" disabled >
                  <label class="label_item" for="radio">
                  </label>
                  <input type="radio" class="radio_item" disabled >
                  <label class="label_item" for="radio">
                  </label>
                  <input type="radio" class="radio_item" disabled >
                  <label class="label_item" for="radio">
                  </label>
                  <input type="radio" class="radio_item" disabled >
                  <label class="label_item" for="radio">
                  </label>
                  <input type="radio" class="radio_item" disabled >
                  <label class="label_item" for="radio">
                  </label>


              <?php

              //$zone."/".$letters[$i].$fila;


                $fila=12;

                for($i=0;$i<=2;$i++){
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
                  <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/verde.png"?>">
                  </label>



                <?php
              }
                }
                ?>
                </div>
                </div>


                <div class="container">
                  <div class="row">
                    <input type="radio" class="radio_item" disabled >
                    <label class="label_item" for="radio">
                    </label>
                    <input type="radio" class="radio_item" disabled >
                    <label class="label_item" for="radio">
                    </label>
                    <input type="radio" class="radio_item" disabled >
                    <label class="label_item" for="radio">
                    </label>
                    <input type="radio" class="radio_item" disabled >
                    <label class="label_item" for="radio">
                    </label>
                    <input type="radio" class="radio_item" disabled >
                    <label class="label_item" for="radio">
                    </label>
                    <input type="radio" class="radio_item" disabled >
                    <label class="label_item" for="radio">
                    </label>
                    <input type="radio" class="radio_item" disabled >
                    <label class="label_item" for="radio">
                    </label>
                    <input type="radio" class="radio_item" disabled >
                    <label class="label_item" for="radio">
                    </label>
                    <input type="radio" class="radio_item" disabled >
                    <label class="label_item" for="radio">
                    </label>
                    <input type="radio" class="radio_item" disabled >
                    <label class="label_item" for="radio">
                    </label>
                    <input type="radio" class="radio_item" disabled >
                    <label class="label_item" for="radio">
                    </label>



                <?php

                //$zone."/".$letters[$i].$fila;


                  $fila=13;

                  for($i=0;$i<1;$i++){
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
                    <label class="label_item" for="radio<?php echo $zone."/".$letters[$i].$fila;?>"><?php $letters[$i].$fila;?><img class="img-responsive"src="<?php echo base_url()."assets/images/verde.png"?>">
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
