<?php if ( ! defined('BASEPATH'))  exit('No direct script access allowed');


class admin extends CI_Controller{

public function index(){

  $this->load->view("admin");

}

public function postAdmin(){

  $this->load->model("adminModel");
  $usuario=$this->input->post("user");
  $monto=$this->input->post("amount");
  $qr=$this->input->post("free");
  $pass=$this->input->post("pass");
  if($pass=="adminpagos13lag"){
    $id=$this->adminModel->returnID($usuario);
    $id=$id[0]->idusuarios_internos;
    $pago=$this->adminModel->insertarPago($id,$monto);
    $this->generarCodigo($usuario);




  }


}

public function generarCodigo($nombre)
{
    //$nombre=$this->session->userdata('usuario');
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

}
