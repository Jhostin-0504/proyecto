<?php
 
$conexion = mysqli_connect('localhost','root','','inventarios') or die(mysql_error($mysiqli));

insertar($conexion);

function isertar ($conexion){
    $nombres = $_post['Nombre_Completo'];
    $cedula = $_post['Cedula_Cliente'];
    $fecha = $_post['Fecha'];
    $costo_unitario = $_post['Costo_Unitario'];
    $producto = $_post['Producto'];
    $cantidad = $_post['Cantidad'];
    $costo_total =$_post['Costo_Total']

    $consulta = " INSERT INTO clintes(Nombre_Completo,Cedula_Cliente, Fecha, Costo_Unitario, Producto, Cantidad, Costo_Total)
     VALUES ($nombres, $cedula, $fecha, $costo_unitario, $prodcuto, $cantidad, $costo_total)";
   
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}
?>