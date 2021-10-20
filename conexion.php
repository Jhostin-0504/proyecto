<?php

/**
 * Realiza la conexion con la mysql
 */
 function conection(){
    $conexion = new mysqli('localhost','root','','inventarios');  
    if ($conexion->connect_errno) {
        return  "Error: No se pudo conectar a MySQL." ;
    }else{
        return  $conexion;
    }
 }
?>
