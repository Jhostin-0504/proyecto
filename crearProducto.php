<?php
include 'conexion.php';
$conexion = conection();

insertar($conexion);

function insertar ($conexion){

  $caracteristicas = $_POST['caracteristicas']; 
  $cantidad= $_POST['cantidad'];
  $costo= $_POST['costo'];  
   $consulta = "INSERT INTO `productos`(`caracteristicas`, `cantidad`, `costo`)
   VALUES ('$caracteristicas','$cantidad','$costo')";
 
 
  if($conexion->query($consulta) === true){
    header("Location: producto.php");
}else{
    echo($conexion->error);
}
mysqli_close($conexion);
} 

?>