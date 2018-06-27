<?php 
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	require_once("../models/contrasena_model.php");
	require_once("../controllers/correo_controller.php");

	$rut = $_REQUEST['rut'];
	$oldpass = $_REQUEST['oldpass'];
	$newpass = $_REQUEST['newpass'];
	$newpass2 = $_REQUEST['newpass2'];

	$contrasena_model=new RecuperarContrasenaModel();
	$correo_controller=new CorreoController();

	$datos_usuario=$contrasena_model->get_usuario_con_rut($rut);
	$datos_persona=$contrasena_model->get_persona_con_rut($rut);

	if (strcmp($oldpass, $datos_usuario[0]['u_contrasena']) == 0) {
    	if (strcmp($newpass, $newpass2) == 0) {
    		$result=$contrasena_model->update_contrasena_usuario($rut, $newpass);
    		if ($result) {
    			$mail=$correo_controller->enviar_correo_cambio_contrasena($datos_persona[0]['p_correo'], $newpass);
    			if($mail){
    				$answer=0;
    			}
    			else{
    				$answer=1;
    			}
			}
			else{
				$answer=2;
			}
		}
		else{
			$answer=3;
		}
	}
	else{
		$answer=4;
	}
	header("Location:../views/cambiar_contrasena_view.php?answer=".$answer);
?>