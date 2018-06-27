<?php
	require_once("../models/contrasena_model.php");
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
	$rut = $_REQUEST['rut'];
	$contrasena=new RecuperarContrasenaModel();
	$datos=$contrasena->get_usuario_con_rut($rut);

	if (empty($datos)) {
    	header("Location:../views/recuperar_contrasena_view.php?answer=2");
	}
	else{
		$datos=$contrasena->get_persona_con_rut($rut);
		require_once("../views/confirmar_envio_contrasena_view.php");
		exit;
	}
?>