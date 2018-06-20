<?php
	require_once("../models/recuperar_contrasena_model.php");
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
	$rut = $_REQUEST['rut'];
	$contrasena=new RecuperarContrasenaModel();
	$datos=$contrasena->get_usuario_con_rut($rut);

	if (empty($datos)) {
    	echo '$var es o bien 0, vacía, o no se encuentra definida en absoluto';
	}
	else{
		$datos=$contrasena->get_persona_con_rut($rut);
		//echo $datos[0]['p_correo'];
			//header('Location: ../views/confirmar_envio_contrasena_view.php?correo='.$datos[0]['p_correo']);
			require_once("../views/confirmar_envio_contrasena_view.php");
		exit;
	}
?>