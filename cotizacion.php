<html lang="es">
  <head>
    <meta charset="utf-8">
    <link href="css/estilo.css" rel="stylesheet" />
    <title>HVG</title>
  </head>
  <body >
  
    <div id="principal">
      <div id="cabecera">
        <nav>
          <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="producto.php">Productos</a></li>
            <li><a href="cliente.php">Clientes</a></li>
            <li><a href="usuario.php">Usuarios</a></li>
            <li><a href="cotizacion.php">Cotizaciones</a></li>
              <li><a href="factura.php">Facturas</a></li>
          </ul>
        </nav> 
  </div>
 
   </div>
   <div id=columnas class="columnas">
    <img id="logo" src="imagenes/Logo.png" />
      <div id="cuadro" class="cuadro">
        <form id="formulario" action="conexion.php" method="post" name="formulario">
          <h2>Crear cotización</h2>
          <ul>
            <table class="table" >
              <th>Producto</th>
              <th>precio</th>
              <th>cantidad</th>
              <th>valor</th>
              <tr>
                <td><input type="text" id="cuadro"></td>
                <td><input type="text"> </td>
                <td><input type="number" min="0"></td>
                <td><input type="text"> </td>
              </tr>
              <tr>
              <td><input type="text"></td>
                <td><input type="text"> </td>
                <td><input type="number" min="0"></td>
                <td><input type="text"> </td>
              </tr>
              <tr>
              <td><input type="text"></td>
                <td><input type="text"> </td>
                <td><input type="number" min="0"></td>
                <td><input type="text"> </td>

              </tr>
              <th><input type="text" placeholder="valor total"></th>
             
         </table>
          </ul>            
          <button id="Ingresar" type="submit">Cotizar</button>
        </form>
      </div>
</div>

  <div>
    

    <footer>
        <p>Contáctenos</p>
        <p>Celular: 3227371726</p>
        <p>correo: gerencia@hvg.com</p>
    </footer>



  </div>
    
  </body>

</html>
