<?php
 
$conexion = mysqli_connect('localhost','root','','inventarios');

insertar($conexion);

function isertar ($conexion){
    $cliente = $_post['Cliente'];
    $cedula_cliente = $_post['Cedula_Cliente'];
    $fecha = $_post['Fecha'];
    $costo = $_post['Costo'];
    $productos = $_post['Productos'];
    $descuentos = $_post['Descuentos'];

    $consulta = " INSERT INTO cotizacion(Cliente, Cedula_Cliente, Fecha, Costo, Productos, Descuentos)
     VALUES ('$cliente', 'cedula_cliente', '$fecha', '$costo', '$productos', '$descuentos')";
   
    mysqli_query($conexion, $consulta);
    echo($conexion, $consulta);
    echo($consulta)
    mysqli_close($conexion);
}
?>