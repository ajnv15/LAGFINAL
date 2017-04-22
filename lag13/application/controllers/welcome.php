<?php if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
$this->load->library("session");
		//$this->load->model('lag');
		$this->load->view("final");



	}
	public function testlogin(){//copiar a welcome
  $this->load->view("ajax");
  }


public function regresadatos(){

	$user=$this->input->get('user');
	$this->load->model('lag');
	$asiento_usuario=$this->lag->getasientousuario($user);
	$asiento_usuario=$asiento_usuario[0]->numero;
	$tallerusuario=$this->lag->gettallerUsuario($user);
	$dato=explode("/",$asiento_usuario);
	if($dato[0]=="pr"){
		$zona="morada";
	}
	if($dato[0]=="bca"){
		$zona="blanca";
	}
	if($dato[0]=="vr"){
		$zona="verde";
	}
	if($dato[0]=="rj"){
		$zona="roja";
	}


	$tallerusuario=$tallerusuario[0]->tema;

	$text= "Zona ".$zona."<br>Numero ".$dato[1]."<br>";
	$text.= "Taller ".$tallerusuario;

	echo $text;

}


	/*La siguiente función nos permite insertar el nombre y matricula en la tabla de internos*/
		public function postInterno(){//registro de internos
			$matricula=$this->input->post("matricula");

			$pass=$this->input->post("pass");
			$this->load->model('lag');
			$pass=md5($pass);
			$fd=uniqid("ds");
			$insertar="";
			$matriculaValida=$this->lag->validarmatricula($matricula);
			if($matriculaValida){
			if(!$this->lag->checarInterno($matricula)){
				$uniquecode="acx".substr($fd,8,14);
				if(!$this->lag->verifUniquecodeExt($uniquecode))
				{
				$insertar=$this->lag->insertarinterno($matricula,$pass,$uniquecode);

				}else{
				$uniquecode=$uniquecode.substr(uniqid(),8,10);
				$insertar=$this->lag->insertarinterno($matricula,$pass,$uniquecode);

			}
		}else{

			echo "ya estas registrado";
		}
		echo $insertar;
	}
	else
	{
		echo "tu matricula no existe como alumno de LAG";
	}
			//redirect("welcome/index");
		}



	public function postExterno(){//insertar externo
		$nombre=$this->input->post("nombre");
		$email=$this->input->post("email");
		$pass=$this->input->post("pass");
		$this->load->model('lag');
		$pass=md5($pass);
		$insertar="";
		if(!$this->lag->checarexterno($email)){
				$fd=uniqid("ds");
				$uniquecode="acx".substr($fd,8,14);
				if(!$this->lag->verifUniquecodeExt($uniquecode))
				{
					$insertar=$this->lag->insertarexterno($nombre,$email,$pass,$uniquecode);
				}else{
						$uniquecode=$uniquecode.substr(uniqid(),8,10);
						$insertar=$this->lag->insertarexterno($nombre,$email,$pass,$uniquecode);

					}
				}
				else{
					echo "ya estas registrado";
				}
		echo $insertar;//redirect("welcome/index");
	}

public function iniciarSesion()
{
	$this->load->model('lag');
	$usuario=$this->input->post("user");
	$pass=$this->input->post("pass");
	$pass=md5($pass);
	$interno=$this->lag->SesionInterno($usuario,$pass);
	$externo=$this->lag->SesionExterno($usuario,$pass);

	if($interno){
		  $this->load->library("session");
			$this->session->set_userdata('usuario',$interno[0]->matricula);
			$this->session->set_userdata("tipousuario","interno");
			//header("location:".base_url()."index.php/sesion/index");
			echo "ingreso";

	}
	//inicio de sesion y redireccion a nuevo controlador
	//hacer una funcion que seleccione user y pass de bd para usuarios internos
	 if($externo){

		$this->load->library("session");
		$this->session->set_userdata('usuario',$externo[0]->email);
		$this->session->set_userdata("tipousuario","externo");
		echo "ingreso";

		}
else if ($interno==false && $externo==false) {
	echo "error";

}
}



		public function EnviarEmail()
		{
			$htmlContent = file_get_contents(base_url()."assets/htm/email_template.html");

			$this->load->library('mailer');
			$mail = new PHPMailer;
			$mail->IsSMTP();
			$mail->SMTPAuth = true;
			$mail->SMTPDebug = 2;
			$mail->Host = 'smtp-mail.outlook.com';
			$mail->Port = 587;
			$mail->Username = 'semana13lag@hotmail.com';
			$mail->Password = 'semanaLAG13';
			$mail->SMTPSecure = 'STARTTLS';
			$mail->From = "semana13lag@hotmail.com";
			$mail->FromName = "Inscripcion Exitosa";
			$mail->Priority = 1;
			$mail->CharSet     = 'UTF-8';
  		$mail->Encoding    = '8bit';
  		$mail->Subject     = 'Test Email Using Gmail';
  		$mail->ContentType = 'text/html; charset=utf-8\r\n';
			$mail->AddCustomHeader("X-MSMail-Priority: High");
			$mail->WordWrap = 900;
			$mail->addAddress("ajnv150485@gmail.com", "Arturo");
			$mail->isHTML(true);
			$mail->Subject = "Bienvenido a la Semana de Adminitración y Gestión";
			$mail->Body = $htmlContent;
			$mail->AltBody = "This is the plain text version of the email content";
			$mail->send();
			$mail->SmtpClose();
			if($mail->IsError())
			{
			    //echo "Mailer Error: " . $mail->ErrorInfo;
			}
			else
			{
			    echo "Message has been sent successfully";
			}
			// $htmlContent = file_get_contents(base_url()."assets/htm/email_template.html");
			//
			// $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
			// mail("aj_nv@hotmail.com","inscripcion exitosa",$htmlContent,$headers);
		}



  }
