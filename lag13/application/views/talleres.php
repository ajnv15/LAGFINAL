<div class="tab-pane fade"  id="talleres">

<script>
$(document).ready(function(){

  $("#taller").click(function(){
          event.preventDefault();
          var  taller = $("input[name='optradio']:checked").val();
          if(taller==null){
            swal("Selecciona un taller");
          }else{
          var dataTaller = "&taller="+taller;
          swal({
        title: "¿Seguro que deseas este taller?",
        text: "Una vez seleccionado no se podran realizar cambios",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3366ff",
        confirmButtonText: "Si, estoy seguro",
        closeOnConfirm: false
      },
      function(){

        $.ajax({
          method: "post",
          url: "posttaller",
          data: dataTaller,
          success: function(data){
            if(data=="exito"){
            swal({
            title: "Exito",
            text: "Se recargará la pagina",
            type: "success",
            showCancelButton: false,
            confirmButtonColor: "#3366ff",
            confirmButtonText: "Recargar",
            closeOnConfirm: false
          },
          function(){
            location.reload();
          });
        }
        else{
          swal("Ocurrio un error intenta más tarde");
        }
          }
        });


      });
    }

  });


});


</script>

  <div class="modalfade">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-xl-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-0 col-xl-offset-2">
      <div class="panel animated fadeInDown">
        <div class="modal-header">
          <h3 class="modal-title">Seleción de taller</h3>
        </div>
        <div class="modal-body">

  <div class="row">
  <div class="table-responsive">
  <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>Empresa</th><th>Tema</th><th>Capacidad</th><th>Seleccionar Taller</th><th>Descripción de Empresa</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if(isset($taller)){
        foreach ($taller as $taller) {
      ?>
<tr>

<th><?php echo $taller->empresa;?></th><td><?php echo $taller->tema;?></td><td><?php echo $taller->capacidad;?> personas</td>
<td>
<div class="radio">
<label><input type="radio"  value="<?php echo $taller->id; ?>"id='tele' name="optradio">Registrarme</label>
</div>
</td>
<td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalD<?php  echo $taller->id; ?>">Descripción</button>
<div class="modal fade" id="myModalD<?php  echo $taller->id; ?>" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
 <div class="modal-header">
   <button type="button" class="close" data-dismiss="modal">&times;</button>
   <h4 class="modal-title"><?php echo $taller->empresa; ?></h4>
 </div>
 <div class="modal-body">

   <?php echo $taller->descripcion; ?>

 </div>
 <div class="modal-footer">
   <button type="button" class="btn btn-default" data-dismiss="modal" >Cerrar</button>
 </div>
</div>

</div>
</div>
</td>

</tr>

<?php
        }
      }

      ?>
    </tbody>
  </table>
  </div>
</div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-primary" id="taller" >Registrar</button>
</div>

</div>
</div>
</div>
</div>
