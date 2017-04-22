<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminModel extends CI_Model {

public function returnID($usuario){
  $query="select idusuarios_internos from usuarios_internos where matricula='$usuario'";
  $query2=$this->db->query($query);
  return $query2->result();


  }

  public function insertarPago($usuario,$monto){
    $query="insert into pagos_internos (idusuarios_internos,monto) values ('$usuario','$monto')";
    $query2=$this->db->query($query);
    return true;


    }

}
