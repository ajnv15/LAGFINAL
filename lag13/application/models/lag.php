<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lag extends CI_Model {

  public function checarInterno($matricula)
  {
    $query="select * from  usuarios_internos where matricula='$matricula'";
    $query2= $this->db->query($query);
    if($query2->num_rows>0){
      return true;
    }
    else {
      return false;
    }
  }
  public function getnombre($matricula){
    $query="select * from  internos where matricula='$matricula'";
    $query2= $this->db->query($query);
    return $query2->result();

  }
  public function getasientos(){
    $query="select numero from asientos";
    $query2= $this->db->query($query);


    return $query2->result();
  }
  public function gettaller(){
    $query="select * from talleres where capacidad>0";
    $query2= $this->db->query($query);


    return $query2->result();
  }

  public function getasientousuario($usuario){
    $query="select numero, dia from asientos where usuario='$usuario'";
    $query2= $this->db->query($query);
    if($query2){
    return $query2->result();
  }
  else{
    return false;
  }
  }

  public function selecciontaller($taller,$usuario){
    $query="insert into asigna_taller (id_usuario,id_empresa)
    values ('$usuario',".$taller.")";

    $query3="update talleres set capacidad=capacidad-1 where id=".$taller."";
    if($query2= $this->db->query($query) && $query4=$this->db->query($query3))
    {
      return true;
    }else {
      return false;
    }

  }


  public function gettallerUsuario($usuario){
    $query="select id_empresa, tema from asigna_taller, talleres where id_usuario='$usuario' and id_empresa=talleres.id";
    $query2= $this->db->query($query);
    if($query2->num_rows()>0){
    return $query2->result();
  }
  else{

    return false;
  }
  }
  public function getasientosdia($dia){
    $query="select numero from asientos where dia = '$dia' or dia='todos'";
    $query2= $this->db->query($query);


    return $query2->result();
  }
    public function insertarAsiento($asiento,$dia,$usuario){
      $query="insert asientos (numero,dia,usuario)
      values ('$asiento','$dia','$usuario')";
      if($query2= $this->db->query($query))
      {
        return true;
      }else {
        return false;
      }

    }

  public function validarmatricula($matricula)
  {
    $query="select * from internos where matricula='$matricula'";
    $query2= $this->db->query($query);
      if($query2->num_rows>0){
        return true;
      }
      else {
        return false;
      }
  }

  public function checarexterno($email)
  {
    $query="select * from  usuarios_externos where email='$email'";
    $query2= $this->db->query($query);
    if($query2->num_rows>0){
      return true;
    }
    else {
      return false;
    }
  }
    public function getUserdataInterno($matricula){
      $query="select * from usuarios_internos where matricula='$matricula'";
      $query2= $this->db->query($query);
        return $query2->result();

    }

    public function getUserdataExterno($email){
      $query="select * from usuarios_externos where email='$email'";
      $query2= $this->db->query($query);
      return $query2->result();

    }

    public function insertarinterno($matricula,$pass,$uniquecode){
          $query="insert into usuarios_internos (matricula,password,unique_code)
          values ('$matricula','$pass','$uniquecode')";
          $query2= $this->db->query($query);

          if ($query2) {
            return "Se ha registrado con exito";

          }
        else {
          return "ha ocurrido un error, por favor intenta de nuevo";
        }
    }

    public function verifUniquecodeExt($code){

      $query="select * from usuarios_externos where unique_code='$code'";
      $query2= $this->db->query($query);

      if ($query2->num_rows()>0) {
        return true;

      }
      else{

        return false;
      }

    }


public function insertarexterno($nombre,$email,$pass,$code){
  $query="insert into usuarios_externos(nombre,email,password,unique_code)
  values ('$nombre','$email','$pass','$code')";
  $query2= $this->db->query($query);

  if ($query2) {
    return "Se ha registrado con exito";

  }
  else {
  return "ha ocurrido un error, por favor intenta de nuevo";
  }
}

  public function SesionInterno($usuario,$pass)
  {
      $query="select * from  usuarios_internos where matricula='$usuario' and password='$pass'";
      $query2= $this->db->query($query);

      if ($query2->num_rows()>0) {
        return $query2->result();

      }
    else {
      return false;

    }
  }

public function SesionExterno($usuario,$pass)
{
  $query="select * from  usuarios_externos where email='$usuario' and password='$pass'";
  $query2= $this->db->query($query);

  if ($query2->num_rows()>0) {
    return $query2->result();

  }
else {
  return false;

}
}

public function getmontoIterno($id)
{
  $query="select sum(monto) as cantidad from pagos_internos where idusuarios_internos='$id'";
  $query2= $this->db->query($query);

  if ($query2){
    return $query2->result();


  }
}
public function insertQR($user,$tipo,$qr){
  $query="update usuarios_".$tipo."s set qrcode='$qr' where idusuarios_".$tipo."s='$user'";
  $query2= $this->db->query($query);
  if ($query2){
    return true;
  }


}
//se agrega función de getmonto para externos
public function getmontoExterno($id)
{
  $query="select sum(monto) as cantidad from pagos_externos where idusuarios_externos='$id'";
  $query2= $this->db->query($query);

  if ($query2){
    return $query2->result();


  }
}

}


?>
