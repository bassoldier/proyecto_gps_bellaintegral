<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	require_once("../models/contrasena_model.php");
	require_once("../controllers/contrasena_controller.php");
	require_once("../controllers/correo_controller.php");
	

	$rut = $_REQUEST['rut'];
	$correo = $_REQUEST['correo'];

	$contrasena_model=new RecuperarContrasenaModel();
	$contrasena_controller=new ContrasenaController();
	$correo_controller=new CorreoController();

	$new_contrasena=$contrasena_controller->generar_contrasena();
	$result=$contrasena_model->update_contrasena_usuario($rut, $new_contrasena);


	if ($result) {
    	$mail=$correo_controller->enviar_correo_recuperar_contrasena($correo, $new_contrasena);
    	if($mail){
    		$answer=0;
    	}
		else{
    		$answer=1;
    	}
	}
	else{
		$answer=3;
	}
	header("Location:../views/recuperar_contrasena_view.php?answer=".$answer);
?>