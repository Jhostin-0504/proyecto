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
        <form id="formulario" action="crearprodcuto.php" method="POST" name="formulario">
          <h2>Ingresar nuevo producto</h2>
          <ul>
            <li>
            <input type="text" name="caracteristicas" placeholder="Carateristicas"></li>
            <input type="text" name="cantidad" placeholder="cantidad"></li>
            <li><input type="text" name="costo" placeholder="Costo"></li>
            <li>
           
            
              <button id="Ingresar" type="submit">Crear</button>
              <button id="Ingresar" type="reset">Limpiar</button>
          </ul>

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
