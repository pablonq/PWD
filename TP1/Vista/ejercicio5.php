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
    
        <title>Ejercicio 5</title>
    </head>
  <body>
    <section class="eje seccion-clara">
      <div class="container text-center">
        <div class="row">
        <!-- Ejercicio 5 -->
          <div class="columna col-12 col-md-3 ">
          	<p class="ejercicios-titulo">Ejercicio 5</p>
          	<form action="../Control/ejercicio5.php" method="get" class="needs-validation" novalidate>
							<div>
          			<p>Estudios:</p>
          			<input type="radio" name="estudios" id="input_estudios1" value="No tiene estudios" class="form-check-input" required><label for="input_estudios1" class="form-check-label">No tiene estudios</label>
          			<input type="radio" name="estudios" id="input_estudios2" value="Estudios Primarios" class="form-check-input" required><label for="input_estudios2" class="form-check-label">Estudios Primarios</label>
          			<input type="radio" name="estudios" id="input_estudios3" value="Estudios Secundarios" class="form-check-input" required><label for="input_estudios3" class="form-check-label">Estudios Secundarios</label>
								<div class="invalid-feedback">
								Es necesario ingresar los estudios
								</div>
          		</div>
							<div>
          			<p>Sexo:</p>
            		<input type="radio" name="sexo" id="input_sexo1" value="Femenino" class="form-check-input" required><label for="input_sexo1" class="form-check-label">Femenino</label>
            		<input type="radio" name="sexo" id="input_sexo2" value="Masculino" class="form-check-input" required><label for="input_sexo2" class="form-check-label">Masculino</label>
            		<input type="radio" name="sexo" id="input_sexo3" value="Otro" class="form-check-input" required><label for="input_sexo3" class="form-check-label">Otro</label>
								<div class="invalid-feedback">
								Es necesario ingresar el sexo
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