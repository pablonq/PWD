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
    
        <title>Ejercicio 2</title>
  </head>
  <body>
    <section class="eje seccion-clara">
      <div class="container text-center">
        <div class="row">
          <!-- Ejercicio 2 -->
          <div class="columna col-12 col-md-3">
            <p class="ejercicios-titulo">Ejercicio 2</p>
            <form action="../Control/ejercicio2.php"  method="get" class="needs-validation" novalidate>
            	<label for="dia"class="instruccion">Ingrese las horas </label><br>
							<div>
              	<label>Hs del Lunes: </label><input type="number" name="lunes" id="dia" class="input_dato form-control" required>
								<div class="invalid-feedback">
								Es necesario ingresar las horas
								</div>
								<div class="valid-feedback">
								Todo correcto!
								</div><br>
							</div>
							<div>
              	<label>Hs del Martes: </label><input type="number" name="martes" id="dia" class="input_dato form-control" required> 
								<div class="invalid-feedback">
								Es necesario ingresar las horas
								</div>
								<div class="valid-feedback">
								Todo correcto!
								</div><br>
							</div>
							<div>
              	<label>Hs del Miercoles: </label><input type="number" name="miercoles" id="dia" class="input_dato form-control" required>
								<div class="invalid-feedback">
								Es necesario ingresar las horas
								</div>
								<div class="valid-feedback">
								Todo correcto!
								</div><br>
							</div>
							<div>
              	<label>Hs del Jueves: </label><input type="number" name="jueves" id="dia" class="input_dato form-control" required>
								<div class="invalid-feedback">
								Es necesario ingresar las horas
								</div>
								<div class="valid-feedback">
								Todo correcto!
								</div><br>
							</div>
							<div>
              	<label>Hs del Vienres: </label><input type="number" name="viernes" id="dia" class="input_dato form-control" required>
              
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
        
