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
            <li><a href="index.html">Inicio</a></li>
            <li><a href="producto.html">Productos</a></li>
            <li><a href="cliente.html">Clientes</a></li>
            <li><a href="usuario.html">Usuarios</a></li>
            <li><a href="cotizacion.html">Cotizaciones</a></li>
              <li><a href="factura.html">Facturas</a></li>
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
            <table class="table">
              <th>Producto</th>
              <th>precio</th>
              <th>cantidad</th>
              <tr>
                <td>exxtintor </td>
                <td>10.000</td>
                <td>
                  <input type="number" min="0">
                </td>
              </tr>

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
