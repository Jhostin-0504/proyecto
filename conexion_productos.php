<?php
$conexion = mysqli_connect('localhost','root','','inventarios') or die(mysql_error($mysiqli));

insertar($conexion);

function isertar ($conexion){
    $id_producto = $_post['ID_producto'];
    $costo = $_post['Costo'];
    $caracteristicas = $_post['Caracteristicas'];
   

    $consulta = " INSERT INTO productos(ID_producto, Costo, Caracteristicas)
     VALUES ('$ID_prodcuto', '$Costo', '$Caracteristicas')";
   
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}
?>