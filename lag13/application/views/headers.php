<!DOCTYPE html>
<html lang="en">
<head>
  <title>LAG</title>

  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://use.fontawesome.com/42fc8e7dc1.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()."assets/";?>dist/sweetalert-dev.js"></script>

  <script src="<?php echo base_url()."assets/";?>dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>dist/sweetalert.css">

  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<style>
body{
  background-color: #691f38 !important;
}

</style>


<style media="screen">
@media (min-width: 0px) and (max-width: 300px)

{
  .label_item {
    opacity: 1;
    width: 15px !important;
    height: 15px !important;
    font-size: 10px;

  }


}
@media (min-width: 301px) and (max-width: 500px)
{
  .label_item {
    opacity: 1;
    width: 13px !important;
    height: 13px !important;
    font-size: 10px;

  }


}


@media (min-width: 501px) and (max-width: 2000px)

{
  .label_item {
    opacity: 1;
    width: 33px !important;
    height: 33px !important;
    font-size: 10px;

  }


}

</style>

<style>

.radio_item{
  display: none !important;
  width: 10px !important;
  height: 10px !important;


}

  .radio_item:checked + label {
    opacity: 0.4;
  }

</style>


<style>
.radio_item{
display: none !important;
}

.label_item {
opacity: 1;
}

.radio_item:checked + label {
opacity: 0.4;
}
label {
cursor: pointer;
}

#vistaAsiento .modal-body, #vistaAsiento .modal-footer{
  radial-gradient(black 15%, transparent 16%) 0 0,
  radial-gradient(black 15%, transparent 16%) 8px 8px,
  radial-gradient(rgba(255,255,255,.1) 15%, transparent 20%) 0 1px,
  radial-gradient(rgba(255,255,255,.1) 15%, transparent 20%) 8px 9px;
  background-color:#6A767A;
  background-size:16px 16px;



}

#escenario .modal-body, #areamorada .modal-body,
#myModal3 .modal-body, #myModal4 .modal-body, #myModal2 .modal-body,
#myModal4 .modal-header
{

  radial-gradient(black 15%, transparent 16%) 0 0,
  radial-gradient(black 15%, transparent 16%) 8px 8px,
  radial-gradient(rgba(255,255,255,.1) 15%, transparent 20%) 0 1px,
  radial-gradient(rgba(255,255,255,.1) 15%, transparent 20%) 8px 9px;
  background-color:#282828;
  background-size:16px 16px;

    }

	img[usemap] {
		border: none;
		height: auto;
		max-width: 100%;
		width: auto;
	}



</style>


<script>
/*
* rwdImageMaps jQuery plugin v1.6
*
* Allows image maps to be used in a responsive design by recalculating the area coordinates to match the actual image size on load and window.resize
*
* Copyright (c) 2016 Matt Stow
* https://github.com/stowball/jQuery-rwdImageMaps
* http://mattstow.com
* Licensed under the MIT license
*/
;(function($) {
	$.fn.rwdImageMaps = function() {
		var $img = this;

		var rwdImageMap = function() {
			$img.each(function() {
				if (typeof($(this).attr('usemap')) == 'undefined')
					return;

				var that = this,
					$that = $(that);

				// Since WebKit doesn't know the height until after the image has loaded, perform everything in an onload copy
				$('<img />').on('load', function() {
					var attrW = 'width',
						attrH = 'height',
						w = $that.attr(attrW),
						h = $that.attr(attrH);

					if (!w || !h) {
						var temp = new Image();
						temp.src = $that.attr('src');
						if (!w)
							w = temp.width;
						if (!h)
							h = temp.height;
					}

					var wPercent = $that.width()/100,
						hPercent = $that.height()/100,
						map = $that.attr('usemap').replace('#', ''),
						c = 'coords';

					$('map[name="' + map + '"]').find('area').each(function() {
						var $this = $(this);
						if (!$this.data(c))
							$this.data(c, $this.attr(c));

						var coords = $this.data(c).split(','),
							coordsPercent = new Array(coords.length);

						for (var i = 0; i < coordsPercent.length; ++i) {
							if (i % 2 === 0)
								coordsPercent[i] = parseInt(((coords[i]/w)*100)*wPercent);
							else
								coordsPercent[i] = parseInt(((coords[i]/h)*100)*hPercent);
						}
						$this.attr(c, coordsPercent.toString());
					});
				}).attr('src', $that.attr('src'));
			});
		};
		$(window).resize(rwdImageMap).trigger('resize');

		return this;
	};
})(jQuery);
</script>

<script>

$(document).ready(function(e) {

<?php


 if($tipo=="externo" && $monto<251)
{
  ?>

  $("#escenario").hide();
  $("#selint").hide();
  $("input[name='dia']").on("change",function (){

    var  valor = $("input[name='dia']:checked").val();

    var string ="&dia="+valor;
    //alert(string);
    $.ajax({
      method: "post",
      url: "testesender",
      data: string,
      success: function(data){
        $("#escenario").show();
        $('img[usemap]').rwdImageMaps();
        $("#render").html(data);
        //alert(data);
      }
    });

    //alert("heeehehel");


  });

  $("#asiento").submit(function(){
          event.preventDefault();
          var  valor = $("input[name='dia']:checked").val();
          var  asiento = $("input[name='roja']:checked").val();
          if(asiento==null){
            swal("Selecciona un asiento");
          }else{
          var stringas = "&roja="+asiento+"&dia="+valor;
          swal({
        title: "¿Seguro que deseas este asiento?",
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
          url: "testasientos",
          data: stringas,
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
<?php
}

  if($tipo=="interno" || ($tipo=="externo" && $monto>649)){
    ?>
    $("#selext").hide();
    $("#selint").show();
    $("#escenario").hide();
    $("#openescenario").click(function(){
      event.preventDefault();
      var string ="&dia=todos";
      //alert(string);
      $.ajax({
        method: "post",
        url: "testesender",
        data: string,
        success: function(data){
          $("#escenario").show();
          $('img[usemap]').rwdImageMaps();
          $("#render").html(data);
          //alert(data);
        }
      });

    });




    $("#asiento").submit(function(){
            event.preventDefault();

            var  asiento = $("input[name='roja']:checked").val();
            if(asiento==null){
              swal("Selecciona un asiento");
            }else{
            var stringas = "&roja="+asiento+"&dia=todos"
            swal({
          title: "¿Seguro que deseas este asiento?",
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
            url: "testasientos",
            data: stringas,
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


  <?php
      }
  ?>

	$('img[usemap]').rwdImageMaps();

	// $('area').on('click', function() {
	// 	alert($(this).attr('alt') + ' clicked');
	// });
});


</script>

<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<a class="navbar-brand" href="#"><img src="<?php echo base_url().'assets/images/13_sesion.png';?>" alt=""></a>-->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#pagos" data-toggle="tab"><i class="fa fa-money fa-2x" aria-hidden="true"></i>  Pagos</a></li>

        <li><a href="#qr" data-toggle="tab"> <i class="fa fa-qrcode fa-2x" aria-hidden="true"></i>  Código QR</a></li>
        <?php if((isset($qr) && $tipo=="interno") || isset($qr) && $tipo=="externo"){?>
        <li><a href="#asientos" data-toggle="tab"><i class="fa fa-th fa-2x" aria-hidden="true" id="asi"></i>  Asientos <span class="sr-only">(current)</span></a></li>

          <?php }?>

          <?php if(isset($dia) && $tipo=="externo"){
            if($dia=="jueves"|| $dia=="todos"){?>
                <li><a href="#talleres" data-toggle="tab"><i class="fa fa-laptop fa-2x" aria-hidden="true"></i>  Talleres <span class="sr-only">(current)</span></a></li>
            <?php }

          }
          ?>
          <?php if($tipo=="interno"){
            ?>
                <li><a href="#talleres" data-toggle="tab"><i class="fa fa-laptop fa-2x" aria-hidden="true"></i>  Talleres <span class="sr-only">(current)</span></a></li>
            <?php

          }
          ?>

        <li><a href="#telegram" data-toggle="tab"><i class="fa fa-telegram fa-2x" aria-hidden="true"></i>  Telegram</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li ><a > <i class="fa fa-user-o fa-2x" aria-hidden="true"></i> <?php echo $nombre;?></a></li>
        <li ><a href="<?php echo site_url()."/sesion/cerrarSesion";?>" ><i class="fa fa-power-off fa-2x" aria-hidden="true"></i>  Cerrar sesión</a></li>
      </ul>
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="#">Cerrar Sesión</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
  <div class="tab-content">
