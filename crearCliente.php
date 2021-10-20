<?php
include 'conexion.php';
$conexion = conection();


//CRUD
//CREATE
//READ
//UPDATE
//DELETE
insertar($conexion);

/**
 * se encarga de insertar un registro en la tabla
 * clientes
 */
function insertar ($conexion){
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['Apellidos'];
    $razon_social = $_POST['Razonsocial'];
    $telefono = $_POST['Telefono'];
    $correo = $_POST['Correo'];
    $direccion = $_POST['Direccion'];
    $consulta = "INSERT INTO clientes(Nombre,Apellidos, Razonsocial, Telefono, correo, Direccion) 
    VALUES ('$nombres','$apellidos', '$razon_social', '$telefono', '$correo', '$direccion')";
   
    if($conexion->query($consulta) === true){
        header("Location: cliente.php");
    }else{
        echo($conexion->error);
    }

    mysqli_close($conexion);
}
?>