<!DOCTYPE html>
<html lang="es">
    <head>
            <!-- Metadatos -->
            <meta charset="UTF-8">
            <meta name="author" content="PABLO NAVARRO FAI-4284">
            <meta name="description" content="Ejercicio PWD">
            <meta name="keywords" content="formulario, PHP, HTML, CSS, JS">
      <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- TITULO -->
            <title>Ejercicio PWD</title>
            <!-- Favicon -->
            <link rel="icon" type="image/x-icon" href="IMAGES/martillos.png">
            <!-- BOOTSTRAP -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
            <!-- CSS -->
            <link href="CSS/style.css" rel="stylesheet">
    
        <title>Ejercicio 1</title>
  </head>
  <body>
  <section class="eje seccion-clara">
      <div class="container text-center">
        <div class="row">
          <!-- Ejercicio 1 -->
          <div class="columna col-12 col-md-3">
            <p class="ejercicios-titulo">Ejercicio 1</p>
            <form action="../Control/ejercicio1.php" method="get" class="needs-validation" novalidate>
              <label for="numero"  class="instruccion">Numero</p>				
              <input type="number" class="form-control" name="numero" id="numero" required>
	            <div class="invalid-feedback">
								Es necesario ingresar un numero
							</div>
							<div class="valid-feedback">
								Todo correcto!
							</div><br>
							<input type="submit" class="btn btn-primary mt-2" name="boton_enviar" id="boton_enviar"><br>
           	</form>
          </div>
        </div>
      </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="JS/formulario.js"></script>
  </body>
    
</html> 