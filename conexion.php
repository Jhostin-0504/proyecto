<?php
 
$conexion = mysqli_connect('localhost','root','','inventarios') or die(mysql_error)(mysiqli));

insertar($conexion);

function isertar($conexion){
    $nombres = $_post['Nombres'];
    $apellidos = $_post['Apellidos';
    $razon_social = $_post['Razon_social'];
    $telefono = $_post['Telefono'];
    $correo = $_post['Correo'];
    $direccion = $_post['Direccion'];

    $consulta = " INSERT INTO clintes(Nombre,Apellidos, Razonsocial, Telefono, Correo, Direccion)
     VALUES ($nombres,$apellidos,$razon_social,$telefono,$correo, $direccion)";
   
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);


}

>?