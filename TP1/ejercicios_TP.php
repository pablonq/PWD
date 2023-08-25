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
            <form action="Control/ejercicio1.php" method="get" class="needs-validation" novalidate>
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
          <!-- Ejercicio 2 -->
          <div class="columna col-12 col-md-3">
            <p class="ejercicios-titulo">Ejercicio 2</p>
            <form action="Control/ejercicio2.php"  method="get" class="needs-validation" novalidate>
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
          <!-- Ejercicio 3 -->
          <div class="columna col-12 col-md-3">
            <p class="ejercicios-titulo">Ejercicio 3</p>
            <form action="Control/ejercicio3.php" method="post" class="needs-validation" novalidate>
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
            
					<!-- Ejercicio 5 -->
          <div class="columna col-12 col-md-3 ">
          	<p class="ejercicios-titulo">Ejercicio 5</p>
          	<form action="Control/ejercicio5.php" method="get" class="needs-validation" novalidate>
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
		<section class="eje seccion-clara">
			<div class="container text-center">
        <div class="row">
				<!--Ejercicio 6-->
					<div class="columna col-12 col-md-3 ">
      			<p class="ejercicios-titulo">Ejercicio 6 </p>
      			<form action="Control/ejercicio6.php" method="get" class="needs-validation" novalidate>
							<div>
								<p>Deporte:</p><br>
      					<input type="checkbox" name="input_deporte[]" id="input_deporte1" value="Futbol" class="form-check-input"><label for="input_deporte1" class="form-check-label">Futbol</label>
      					<input type="checkbox" name="input_deporte[]" id="input_deporte2" value="Basket" class="form-check-input"><label for="input_deporte2" class="form-check-label">Basket</label>
      					<input type="checkbox" name="input_deporte[]" id="input_deporte3" value="Tennis" class="form-check-input"><label for="input_deporte3" class="form-check-label">Tennis</label>
      					<input type="checkbox" name="input_deporte[]" id="input_deporte4" value="Voley" class="form-check-input" ><label for="input_deporte4" class="form-check-label">Voley</label>
								<div class="invalid-feedback">
								Es necesario ingresar el deporte
								</div>
							</div>
							<input type="submit" name="boton_enviar" id="boton_enviar2" class="btn btn-primary mt-2">
						</form>
					</div>
				<!--Ejercicio 7-->
					<div class="columna col-12 col-md-3 ">
          	<p class="ejercicios-titulo">Ejercicio 7</p>
          	<form action="Control/ejercicio7.php" method="get" class="needs-validation" novalidate>
						<div>
							<div>
								<input type="number" class="form-control" placeholder="" id="op1_form" name="num1" required>
								<div class="invalid-feedback">
								Es necesario ingresar un numero
								</div>
							</div>	
							<div>
          			<input type="number" class="form-control" placeholder="" id="op2_form" name="num2" required>
								<div class="invalid-feedback">
								Es necesario ingresar un numero
								</div>
							</div>
          		<label for="operacion">Operacion:</label>
          		<select id="operacion" name="operacion" class="form-control">
          	 		<option value="Suma">Suma</option>
           			<option value="Resta">Resta</option>
            		<option value="Multiplicacion">Multiplicacion</option>
              </select>
						</div>
						<input type="submit" name="boton_enviar" id="boton_enviar2" class="btn btn-primary mt-2">
						</form>
					</div>
				<!--Ejercicio 8-->
				<div class="columna col-12 col-md-3 ">
      		<p class="ejercicios-titulo">Ejercicio 8</p>
      		<form action="Control/ejercicio8.php" method="get" class="needs-validation" novalidate>
						<div>
							<label for="edad_form" class="form-label">Edad:</label>
       				<input type="number" class="form-control" placeholder="" id="edad_form" name="edad_form" required>
				      <div class="invalid-feedback">
								Es necesario ingresar la edad
							</div>
						</div>
       			<label for="estudia">Condicion del estudiante:</label>
       			<select id="estudia" name="estudia" class="form-control">
           		<option value="NO">No estudia</option>
           		<option value="SI">Estudia</option>
       			</select>
				  	<input type="submit" name="boton_enviar" id="boton_enviar2" class="btn btn-primary mt-2">
      			<input type="reset" class="btn btn-danger" name="Reset" value="Limpiar" />
					</form>
				</div>
			</section>
								


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
		<script>
			// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
		</script>
  </body>
    
</html>
