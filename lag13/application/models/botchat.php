<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class botchat extends CI_Model {


  public function verifChatid($chatid){

    $query="select * from bot_chats where chat_id='$chatid'";
    $query2= $this->db->query($query);

    if ($query2->num_rows()>0) {
      return true;

    }
    else{

      return false;
    }

  }
      public function getchatsid()
      {
      $query="select chat_id from bot_chats";
      $query2= $this->db->query($query);
      return $query2->result();
    }

    public function definetipo($uniquecode)
    {
      $query="select * from usuarios_internos where unique_code='$uniquecode'";
      $query2= $this->db->query($query);
      if ($query2->num_rows()>0) {
        return "internos";

      }
      else
      {
        $query="select * from usuarios_externos where unique_code='$uniquecode'";
        $query2= $this->db->query($query);
        if ($query2->num_rows()>0) {
          return "externos";
                }
                else {
                  return false;
                }

      }
  }

  public function checarChatid($chatid)
  {
    $query="select * from usuarios_internos where chat_id='$chatid'";
    $query2= $this->db->query($query);
    if ($query2->num_rows()>0) {
      return true;

    }
    else
    {
      $query="select * from usuarios_externos where chat_id='$chatid'";
      $query2= $this->db->query($query);
      if ($query2->num_rows()>0) {
        return true;
              }
              else {
                return false;
              }

    }
  }


    public function insertarUniquecode($tipo,$chatid,$uniquecode)
    {
      $query="update usuarios_".$tipo." set chat_id='$chatid' where unique_code='$uniquecode'";
      $query2= $this->db->query($query);


      if($query2){
        return true;

      }
      else{

        return false;
      }

    }

  public function insertarChatid($chatid){

    $query="insert into bot_chats (chat_id, asociado) values (".$chatid.",FALSE)";
    $query2= $this->db->query($query);
    return true;

  }
}
