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
    
        <title>Ejercicio 3</title>
  </head>
  <body>
    <section class="eje seccion-clara">
      <div class="container text-center">
        <div class="row">
          <!-- Ejercicio 3 -->
          <div class="columna col-12 col-md-3">
            <p class="ejercicios-titulo">Ejercicio 3</p>
            <form action="../Control/ejercicio3.php" method="post" class="needs-validation" novalidate>
							<div>
            		<label for="nombre">Nombre: </label><input type="text" name="nombre" id="nombre" class="input_dato form-control" required>
								<div class="invalid-feedback">
								Es necesario ingresar las horas
								</div>
								<div class="valid-feedback">
								Todo correcto!
								</div>
							</div>
							<div>
            		<label for="apellido">Apellido: </label><input type="text" name="apellido" id="apellido" class="input_dato form-control" required>
								<div class="invalid-feedback">
								Es necesario ingresar las horas
								</div>
								<div class="valid-feedback">
								Todo correcto!
								</div>
							</div>
							<div>
            	<label for="edad">Edad: </label><input type="number" name="edad" id="edad" class="input_dato form-control" required>
							<div class="invalid-feedback">
								Es necesario ingresar las horas
								</div>
								<div class="valid-feedback">
								Todo correcto!
								</div>
							</div>
							<div>
            	<label for="direccion">Direccion: </label><input type="text" name="direccion" id="direccion" class="input_dato form-control" required>
								<div class="invalid-feedback">
								Es necesario ingresar las horas
								</div>
								<div class="valid-feedback">
								Todo correcto!
								</div>
							</div>
            	<input type="submit" name="boton_enviar" id="boton_enviar2" class="btn btn-primary mt-2">
						</form>
					</div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="JS/formulario.js"></script>
  </body>
    
</html> 