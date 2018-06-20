<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("localhost", "root", "11010912XD#a", "contrasena");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>