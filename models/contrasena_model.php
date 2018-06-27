<?php
require_once("../db/db.php");

class RecuperarContrasenaModel{
    private $db;
    private $usuario;
    private $persona;

    public function __construct(){
        $this->db=Conectar::conexion();
        $this->usuario=array();
    }

    public function get_usuario_con_rut($rut){
    	$consulta=$this->db->query("select * from Usuarios where p_rut='".$rut."';");
    	while($filas=$consulta->fetch_assoc()){
            $this->usuario[]=$filas;
        }
        return $this->usuario;
    }

    public function get_persona_con_rut($rut){
        $consulta=$this->db->query("select * from Persona where p_rut='".$rut."';");
        while($filas=$consulta->fetch_assoc()){
            $this->persona[]=$filas;
        }
        return $this->persona;
    }

    public function update_contrasena_usuario($rut, $contrasena){
        $result=$this->db->query("update Usuarios set u_contrasena='".$contrasena."' where p_rut='".$rut."';");
        return $result;
    }
}
?>

