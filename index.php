<html lang="es">
  <head>
    <meta charset="utf-8">
    <link href="css/estilo.css" rel="stylesheet" />
    <title>HVG</title>
  </head>
  <body >
  <header>
    <div id="principal">
      <div id="cabecera">
        <nav>
          <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="producto.php">Productos</a></li>
            <li><a href="cliente.php">Clientes</a></li>
            <li><a href="usuario.html">Usuarios</a></li>
            <li><a href="cotizacion.php">Cotizaciones</a></li>
              <li><a href="factura.html">Facturas</a></li>
          </ul>
        </nav>
     
  </div>
 
   </div>
   <div id=columnas class="columnas">
    <img id="logo" src="imagenes/Logo.png" />
       <div id="cuadro" class="cuadro">
        <form id="formulario" action="login.php" method="Post" name="formulario">
          <h2>Ingresar al Sistema</h2>
          <ul>
            <li>
              <label>Email</label>
              <input class="controls" type="email" name="email" value="alex941910@gmail.com" placeholder="Ingrese su correo">
            </li>
            <li>
              <label>Password</label>
              <input class="controls" type="password"  name="password" value="12345"  placeholder="Ingrese su contraseña">
            </li>
              <button id="Ingresar" type="submit">Ingresar</button>
              <button id="Crear"  type="button" onclick="window.location.href = 'usuario.html'" target="_blank">Crear cuenta</button> 
          </ul>

        </form>
      </div>
</div>

  </header>
       
  <div>
    <footer>
        <p>Contáctenos</p>
        <p>Celular: 3227371726</p>
        <p>correo: gerencia@hvg.com</p>
    </footer>



  </div>
  <script src="js/index.js"></script>
  </body>

</html>
