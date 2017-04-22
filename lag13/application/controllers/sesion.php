<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sesion extends CI_Controller {

  public function index() {
    $this->load->library("session");
    if(!$this->session->userdata("usuario")){
      redirect("http://semana13.com.mx/");

    }
    $this->load->library('session');
    // $this->session->set_userdata('tipousuario','externo');
    // $this->session->set_userdata('usuario','hhhe@ho.com');
    $tipo=$this->session->userdata('tipousuario');
    $usuario=$this->session->userdata('usuario');
    $this->load->model('lag');
    if($tipo=="interno"){
      $data=$this->lag->getUserdataInterno($usuario);
      $idusuarios_internos=$data[0]->idusuarios_internos;
      $datos['concepto']=$data[0]->matricula;
      $id=$data[0]->idusuarios_internos;
      $nombre=$this->lag->getnombre($usuario);
      $nombre=$nombre[0]->nombre;
      $datos['nombre']=$nombre;
      //echo $idusuarios_internos;
      $monto=$this->lag->getmontoIterno($idusuarios_internos);




    }

//se agrega para caso de usuarios externos
     if($tipo=="externo"){
      $data=$this->lag->getUserdataExterno($usuario);
      $idusuarios_externos=$data[0]->idusuarios_externos;
      $datos['concepto']=$data[0]->nombre;
      $datos['nombre']=$data[0]->nombre;
      $id=$data[0]->idusuarios_externos;
      //echo $idusuarios_internos;

      $monto=$this->lag->getmontoExterno($idusuarios_externos);


    }

    $asiento_usuario=$this->lag->getasientousuario($usuario);
    if($asiento_usuario){
    $datos['dia']=$asiento_usuario[0]->dia;
    }

    $tallerusuario=$this->lag->gettallerUsuario($usuario);

    $this->session->set_userdata("id",$id);

        $datos['monto']=$monto[0]->cantidad;
        if($datos['monto']==580 && $tipo=="interno"){
          $this->generarCodigo();

        }
        if($datos['monto']>249 && $tipo=="externo"){
          $this->generarCodigo();

        }
        if($datos['monto']==null){

          $datos['monto']=0;
        }
        $datos['qr']=$data[0]->qrcode;
        $this->session->set_userdata("qrcode","".$data[0]->qrcode);
        $this->session->set_userdata("chatid",$data[0]->chat_id);

      $datos['unique_code']=$data[0]->unique_code;

      $datos['tipo']=$tipo;
      $taller=$this->lag->gettaller();
    //
      $this->load->view('headers',$datos);
      if($asiento_usuario)
      {
        $datos["numero"]=$asiento_usuario[0]->numero;
        $this->load->view("asientosvista",$datos);

      }
      else{

          $this->load->view("taller");
      }

      if($tallerusuario){
        $datos['tallerusuario']=$tallerusuario[0]->tema;
        $this->load->view("vistataller",$datos);

      }else{
        $datos['taller']=$taller;
        $this->load->view('talleres',$datos);
      }

      $this->load->view('pagos',$datos);

      $this->load->view('qr',$datos);


      $this->load->view('telegram',$datos);
      $this->load->view('footer');
      $this->load->library('session');

  }


  public function testasientos(){
		$asiento = $this->input->post("roja");
		$dia = $this->input->post("dia");
    $this->load->model("lag");
    $this->load->library("session");
    $usuario=$this->session->userdata("usuario");
    if(!$this->lag->insertarAsiento($asiento,$dia,$usuario)){
      echo "error";

    }else{
      echo "exito";

    }

	}
public function test(){

  $this->load->model("lag");
  $asientos=$this->lag->getasientos();
  $arr=array();
  //$asientos=$asientos->row_array();
foreach ($asientos as $asientos ) {
  array_push($arr,$asientos->numero);
}

  if (in_array("rj/b2",$arr)){

    echo "TRUE";
  }
  else{
    echo "false";
  }

}
  public function testesender()
  {
    $this->load->model("lag");
    $dia=$this->input->post("dia");
    if($dia=="todos"){
      $asientos=$this->lag->getasientos();

    }else{
    $asientos=$this->lag->getasientosdia($dia);
    }
    $arr=array();
    //$asientos=$asientos->row_array();
  foreach ($asientos as $asientos )
  {
    array_push($arr,$asientos->numero);
  }
    $dato['asientos']=$arr;
    // if(in_array($test,$asientos)){
    //   echo "si esta";
    // }

    $html="";
    $html.=$this->load->view("modal",$dato);
    $html.=$this->load->view("modal2",$dato);
    $html.=$this->load->view("modal3",$dato);
    $html.=$this->load->view("modal4",$dato);
    echo $html;
  }


  public function generarCodigo()
  {
      $nombre=$this->session->userdata('usuario');
      $this->load->library("qr");
       $PNG_TEMP_DIR = $_SERVER['DOCUMENT_ROOT']."/lag13/assets/QR/temp/";

      //html PNG location prefix
       $PNG_WEB_DIR = $_SERVER['DOCUMENT_ROOT']."/lag13/assets/QR/temp/";

       if (!file_exists($PNG_TEMP_DIR))
           mkdir($PNG_TEMP_DIR);



      $errorCorrectionLevel = 'M';

      $matrixPointSize = 6;

          $filename = $PNG_TEMP_DIR.'lag'.md5($nombre.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
          QRcode::png("172.16.42.156/lag13/reg.php?user=".$nombre, $filename, $errorCorrectionLevel, $matrixPointSize, 2);

          $file=base_url()."assets/QR/temp/lag".md5($nombre.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).".png";

          $this->load->model("lag");
          $this->load->library("session");
         $tipo=$this->session->userdata('tipousuario');
        $usuario=$this->session->userdata('id');


          $this->lag->insertQR($usuario,$tipo,$file);

      //echo '<img src="'.base_url()."assets/QR/temp/lag".md5($nombre.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png" /><hr/>';


  }
public function posttaller(){

  $this->load->model("lag");
  $this->load->library("session");
  $usuario=$this->session->userdata("usuario");
  $taller=$this->input->post("taller");
  $insert=$this->lag->selecciontaller($taller,$usuario);
   if($insert)
   {
     echo "exito";
   }else{
     echo "error";
   }

}
  public function testlogin(){//copiar a welcome
  $this->load->view("ajax");
  }

  public function postlogintest()
  {
    $usuario=$this->input->post("usuario");
    $password=$this->input->post("password");

echo $usuario." test entra php ".$password;
  }

public function cerrarSesion(){

  $this->load->library("session");
  $this->session->sess_destroy();
  redirect("http://semana13.com.mx/");

}

}
