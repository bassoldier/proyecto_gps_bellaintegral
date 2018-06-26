<?php
	include("./PHPMailer/class.phpmailer.php"); 
	include("./PHPMailer/class.smtp.php"); 
	class CorreoController{

	    public function __construct(){
	    }

	    public function enviar_correo_contrasena($correo, $contrasena){
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
				//echo "Error: " . $mail->ErrorInfo; 
				$ok=0;

			} else { 
				echo "Mensaje enviado correctamente"; 
				$ok=1;
			}	
	    }
	}	
?>