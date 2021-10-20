<?php
include 'conexion.php';
$conexion = conection();

loginVerify($conexion);

function loginVerify($conexion){
    
    $fail = true;
    $email = $_POST['email'];
    $password = $_POST['password'];

    $consulta = "SELECT * FROM usuarios where pass = '$password' and correo = '$email'";
    $users = $conexion->query($consulta);

    while($user = mysqli_fetch_array($users)){
        $fail = false;
    }
    
    mysqli_close($conexion);

    if($fail){
        header("Location: index.php");
    }else{
        header("Location: cliente.php");
    }
}
    
?>