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
        <form id="formulario" action="crearCliente.php" method="POST" name="formulario">
          <h2>Ingresar nuevo cliente</h2>
          <ul>
          <li>
              <input type="text" placeholder="nombres" name="nombres" value="Jofree">
            </li>
             <li>
              <input type="text" placeholder="Apellidos"  name="Apellidos"  value="Jofree">
            </li>
             <li>
              <input type="text" placeholder="Razonsocial"  name="Razonsocial" value="Jofree">
            </li>
            <li>
              <input type="tel" placeholder="Telefono" name="Telefono"  value="3112848699">
            </li>
            <li>
              <input type="email" placeholder="Correo" name="Correo"  value="jofree@gmail.com">
            </li>
             <li>
              <input type="text" placeholder="Direccion" name="Direccion" value="jofr gmail.com">
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
