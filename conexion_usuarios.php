<?php

 
$conexion = mysqli_connect('localhost','root','','inventarios') or die(mysql_error($mysiqli));

insertar($conexion);

function isertar ($conexion){
    $nombres = $_post['Nombres'];
    $apellidos = $_post['Apellidos'];
    $cedula = $_post['Cedula'];
    $cargo = $_post['Cargo'];
    $contraseña = $_post['Contraseña'];
    $correo = $_post['Correo'];

    $consulta = " INSERT INTO usuarios(Nombre,Apellidos, Cedula, Cargo, Contraseña, Correo)
     VALUES ($nombres, $apellidos, $cedula, $cargo, $contraseña, $correo)";
   
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}

?>





