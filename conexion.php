<?php
 
$conexion = mysqli_connect('localhost','root','','baseinventarios') or die(mysql_error)(mysiqli));

insertar($conexion);

function isertar($conexion){
    $nombres = $_post['Nombres'];
    $apellidos = $_post['Apellidos';
    $razon social = $_post['Razon social'];
    $nit/c.c = $_post['Nit/Cedula'];
    $telefono = $_post['Telefono'];
    $correo = $_post['Correo'];
    $direccion = $_post['Direccion'];

    $consulta = "INSERT INTO persona(Nombres ,Apellidos, Razon social, Nit/Cedula, Telefono, Correo, Direccion)
    VALUES  ('$nombres', '$apellidos', '$razon social', '$nit/c.c', '$telefono', '$correo', '$direccion')";
    
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);


}

>?