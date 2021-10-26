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
              <li><a href="factura.html">Factura</a></li>
          </ul>
        </nav>
        
       
     
 
  </div>
 
   </div>
   <div id=columnas class="columnas">
    <img id="logo" src="imagenes/Logo.png" />
      <div id="cuadro" class="cuadro">
        <form id="formulario" action="conexion.php" method="post" name="formulario">
          <h2>Crear Factura</h2>
          <ul>
            <li>
              
              <input type="text" placeholder="Nombre Completo">
            </li>
            <li>
             
              <input type="text" placeholder="cedula cliente">
            </li>

             <li>
              
              <input type="text" placeholder="fecha" required="date">
            </li>
            
             <li>
             
              <input type="text" placeholder="Costo Unitario">
            </li>
              <li>
              
              <input type="text" placeholder="Porducto">
           

            <li>

             <input type="text" placeholder="Cantidad">
            
            </li>

 <li>
              
              <input type="text" placeholder="Costo Total">
            </li>



              <button id="Ingresar" type="submit">Crear</button>
              <button id="Limpiar" type="reset">Limpiar</button>

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
