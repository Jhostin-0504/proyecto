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
    $nombres = $_POST['Nombres'];
    $apellidos = $_POST['Apellidos'];
    $cargo = $_POST['Cargo'];
    $pass = $_POST['Contraseña'];
    $correo = $_POST['Correo'];
    $consulta = "INSERT INTO usuarios(Nombre,Apellidos,cargo,pass,correo,) 
    VALUES ('$nombres','$apellidos','$cargo','$pass','$correo')";
   
    if($conexion->query($consulta) === true){
        header("Location:usuario.php");
    }else{
        echo($conexion->error);
    }

    mysqli_close($conexion);
}
?>