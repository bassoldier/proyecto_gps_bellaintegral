<?php
	class ContrasenaController{

	    public function __construct(){
	    }

	    public function generar_contrasena(){
	    	$caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
			$longpalabra=8;
			for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $longpalabra ; ) {
  				$x = rand(0,$n);
  				$pass.= $caracteres[$x];
			}
	        return $pass;
	    }
	}
?>