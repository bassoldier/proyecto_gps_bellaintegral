<?php
	include("./PHPMailer/class.phpmailer.php"); 
	include("./PHPMailer/class.smtp.php"); 
	class CorreoController{

	    public function __construct(){
	    }

	    public function enviar_correo_recuperar_contrasena($correo, $contrasena){
			$mail = new PHPMailer(); 
			$mail->IsSMTP(); 
			$mail->SMTPDebug = 1; 
			$mail->SMTPAuth = true; 
			
			$mail->Host = 'smtp.gmail.com'; 
			$mail->Port = 465;
			$mail->SMTPSecure = "ssl";  
			$mail->Username = "bellaintegraldireccion@gmail.com"; 
			$mail->Password = "bellaintegral123";
			$mail->From = "bellaintegraldireccion@gmail.com"; 	 
			$mail->FromName = "Dirección Bellaintegral"; 	 
			$mail->Subject = "Su nueva contraseña para Dirección Bellaintegral"; 
			$mail->AltBody ="";
			$body = "Su nueva contraseña de acceso a su cuenta es: ".$contrasena;   
			$mail->Body = $body;	 
			$mail->AddAddress($correo, "Dirección");
			 
			$mail->IsHTML(true); 
			$mail->CharSet = 'UTF-8';	 
			if(!$mail->Send()) { 
				return false;

			} else { 
				return true;
			}	
	    }
	    public function enviar_correo_cambio_contrasena($correo, $contrasena){
			$mail = new PHPMailer(); 
			$mail->IsSMTP(); 
			$mail->SMTPDebug = 1; 
			$mail->SMTPAuth = true; 
			
			$mail->Host = 'smtp.gmail.com'; 
			$mail->Port = 465;
			$mail->SMTPSecure = "ssl";  
			$mail->Username = "bellaintegraldireccion@gmail.com"; 
			$mail->Password = "bellaintegral123";
			$mail->From = "bellaintegraldireccion@gmail.com"; 	 
			$mail->FromName = "Dirección Bellaintegral"; 	 
			$mail->Subject = "Ha realizado cambios en su cuenta"; 
			$mail->AltBody ="";
			$body = "La contraseña de su cuenta de Dirección Bellaintegral ha sido modificada, su nueva clave es: ".$contrasena;   
			$mail->Body = $body;	 
			$mail->AddAddress($correo, "Dirección");
			 
			$mail->IsHTML(true); 
			$mail->CharSet = 'UTF-8';	 
			if(!$mail->Send()) { 
				return false;

			} else { 
				return true;
			}	
	    }
	}	
?>