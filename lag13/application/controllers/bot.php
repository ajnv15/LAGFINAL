<?php if ( ! defined('BASEPATH'))  exit('No direct script access allowed');


class bot extends CI_Controller{

  public function msnEnvio()
  {
    $this->load->view('headwocont');
    $this->load->view('msnTele');
    $this->load->view('footer');


  }
    public function postmensajes()
    {
      $bootToken="372621238:AAEFrCbMNpEE2mwBk2t8ClfHWYWPHWNjnvk";
      $mensaje=$this->input->post("mensaje");
      $code=$this->input->post("code");
      if($code=="mensajemasivo1"){
          $this->load->model('botChat');
          $chatid=$this->botChat->getchatsid();
          foreach ($chatid as $chatid) {
            $url="https://api.telegram.org/bot".$bootToken."/sendmessage?chat_id=".$chatid->chat_id."&text=".$mensaje."&disable_notification=false";
            $message=file_get_contents($url);

            }
      }
      redirect("http://semana13.com.mx");
    }

  public function receiveMessage(){
    $bootToken="372621238:AAEFrCbMNpEE2mwBk2t8ClfHWYWPHWNjnvk";
    $content = file_get_contents("php://input");
    $update = json_decode($content, true);
    $chatid = $update["message"]["chat"]["id"];
    $mensaje = $update["message"]["text"];
    //$mensaje=strtolower($mensaje);

    $this->load->model('botChat');
    if(!$this->botChat->verifChatid($chatid))
      {

        $this->botChat->insertarChatid($chatid);
      }



    $cmd=$mensaje;
    if(strpos($mensaje,"cx"))
      {
        $cmd="/codigo";
      }


      switch ($cmd) {
        case '/start':
          $text="Bienvenido, ya formas parte de la décimo tercera semana de administración y gestión, tenemos muchas sorpresas para ti. Esperelas!";
          break;
        case '/help':
        $text="Aun no tenemos comandos disponibles, espera el lanzamiento oficial";
        break;
        case '/codigo':
          $inuse=$this->botChat->checarChatid($chatid);
          if($inuse){
            $text="Tu cuenta de Telegram ya esta vinculada";

          }
          else{
          $tipo=$this->botChat->definetipo($mensaje);
          if(!$tipo){
            $text="No existe ese codigo";

          }else{

          $update=$this->botChat->insertarUniquecode($tipo,$chatid,$mensaje);

          if($update){
            $text="Se ha vinculado tu cuenta con telegram, ahora podras recibir tus codigo qr por este medio";
          }
          else
          {
              $text="Ha ocurrido un error por favor intenta más tarde";
          }
        }
      }
          break;


        case '/qr':
        //si existe en chat id en la base de datos debemos determina si se ha liberado el pago y enviar la imagen
        //si no existe o esta registrado no se envia la imagen.
        $text="Se ha enviado el codigo qr";

        break;

        default:
          $text="No entiendo tu mensaje envia /help para ver los comando disponibles";
          break;
      }

    $url="https://api.telegram.org/bot".$bootToken."/sendmessage?chat_id=".$chatid."&text=".$text."&disable_notification=false";
    $message=file_get_contents($url);

  }



  public function sendmesage(){
    $this->load->library("session");
    if(!$this->session->userdata("usuario")){
      redirect("http://semana13.com.mx/");
    $bootToken="372621238:AAEFrCbMNpEE2mwBk2t8ClfHWYWPHWNjnvk";
    $chatid="28896927";
    $text="'newtwxt'";
    $url="https://api.telegram.org/bot".$bootToken."/sendmessage?chat_id=".$chatid."&text=".$text."&disable_notification=false";
    $message=file_get_contents($url);
  }
}



  public function sendImage(){
    $this->load->library("session");
    if(!$this->session->userdata("usuario")){
      redirect("http://semana13.com.mx/");
    }

    $bootToken="372621238:AAEFrCbMNpEE2mwBk2t8ClfHWYWPHWNjnvk";
    $chatid=$this->session->userdata("chatid");
    $photo=$this->session->userdata("qrcode");
    $photo;
    $url="http://api.telegram.org/bot".$bootToken."/sendphoto?chat_id=".$chatid."&photo=".$photo."&disable_notification=false";
    $message=file_get_contents($url);

  }



}


?>
