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
        <form id="formulario" action="crearUsuario.php" method="POST" name="formulario">
          <h2>Crear cuenta</h2>
          <ul>
            <li>
             
              <input type="text" placeholder="Nombres" name="Nombres" value="">
            </li>
            <li>
             <input type="text" placeholder="Apellidos" name="Apellidos" value="">
            </li>
             <li> 
             <input type="text" placeholder="Cargo" name="Cargo" value="">
            </li>
              <li>
             <input type="password" placeholder="Contraseña" name="Contraseña" value="">
            </li>
           <li>
              <input type="email" placeholder="Correo" name="Correo" value="">
            </li>
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
