<div class="tab-pane fade"  id="asientos">
  <form id="asiento">
  <div class="modalfade" id="selectdia">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-xl-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-0 col-xl-offset-2">
      <div class="panel animated fadeInDown">
        <div id="selext">
        <div class="modal-header">
          <h3 class="modal-title" id="echo">Selecciona El día</h3>
        </div>
        <div class="modal-body">
          <label class="radio-inline">
            <input type="radio" id="inlineCheckbox1" value="miercoles" name="dia">  Miercoles
          </label>
              <label class="radio-inline">
                <input type="radio" id="inlineCheckbox1" value="jueves" name="dia"> Jueves
              </label>
              <label class="radio-inline">
                <input type="radio" id="inlineRadio1" value="viernes" name="dia"> Viernes
              </label>
              <div class="modal-footer">
              <div class="row">
                <div class="col-lg-6 col-md-16 col-sm-6 col-xs-6 col-xl-6 col-lg-offset-3
                col-md-offset-3 col-sm-offset-3 col-xs-offset-3">

              </div>
            </div>
          </div>
      </div>
    </div>
    <div id="selint">
    <div class="modal-header">
      <h3 class="modal-title" >Escenario</h3>
    </div>
    <div class="modal-body">


        <button id="openescenario" class="btn btn-primary">Mostrar Escenario</button>
          <div class="modal-footer">
          <div class="row">
            <div class="col-lg-6 col-md-16 col-sm-6 col-xs-6 col-xl-6 col-lg-offset-3
            col-md-offset-3 col-sm-offset-3 col-xs-offset-3">

          </div>
        </div>
      </div>
  </div>
</div>

        </div>
      </div>
    </div>

    <div class="modalfade" id="escenario">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-xl-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-0 col-xl-offset-2">
        <div class="panel animated fadeInDown">
          <div class="modal-header">
            <h3 class="modal-title">Asientos</h3> <strong>Da click sobre la zona que desees</strong>
          </div>
          <div class="modal-body">
            <div clas="image-responssive">
              <image class="img-responsive" src="<?php echo base_url()."assets/images/escenario.png";?>" usemap="#ejemplo">
                <map name="ejemplo">
                  <area shape="poly" coords="1,429,1193,421,1173,721,405,1445,1,1449" data-toggle="modal" data-target="#areamorada" alt="morada">
                  <area shape="poly" coords="1013,855,1445,859,1433,2031,441,2035,437,1439" data-toggle="modal" data-target="#myModal2" alt="2">
                  <area shape="poly" coords="1609,423,2769,403,2769,1275,2500,1439,2416,1443,1640,740" data-toggle="modal" data-target="#myModal3" alt="3">
                  <area shape="poly" coords="1448,860,1784,872,2336,1436,2344,1652,2052,1944,1468,1952" data-toggle="modal" data-target="#myModal4" alt="4">
                </map>
            </div>

          <div class="modal-footer">
          <div class="row">
            <div class="col-lg-6 col-md-16 col-sm-6 col-xs-6 col-xl-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3">

          </div>
        </div>
      </div>
      </div>
        </div>
      </div>
    </div>



      <div id="render"></div>
    </form>
</div>
