<?php

class database{
    public static function conectar(){
        $conexion = new mysqli("localhost", "root", "", "tienda_master", '3308');
        $conexion->query("SET NAMES 'utf8");
        
        return $conexion;
    }
}


