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
    <link rel="icon" type="image/x-icon" href="IMAGES/pink_floyd.png">
		<!--BOOTSTRAP-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- BOOTSTRAP ICONO-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- CSS -->
    <link href="CSS/style.css" rel="stylesheet">
    <!-- ICONS FONT AWESOME -->
   	<script src="https://kit.fontawesome.com/73f851add2.js" crossorigin="anonymous"></script>
    <title>Ejercicio 3</title>
  </head>
  <body>
		<section >
		<div class="container">
			<div class="row justify-content-center">
				<div class="columna col-md-8">
					<form action="../Control/verificapass.php" class="formulario needs-validation" id="formulario" novalidate>
						<div class="container mt-4"> <!-- el contenedor tiene un margen superior de 4-->
							<div class="d-flex align-items-center justify-content-center mb-4"><!--  d-flex para convertir el contenedor en un contenedor de elementos flexibles,  align-items-center se utiliza para alinear verticalmente los elementos en el centro del contenedor,  justify-content-center se utiliza para centrar horizontalmente los elementos dentro del contenedor-->
								<h3 class="text-center  mb-2 mr-3">Member Login</h3> <!--El título (<h2>) se ha alineado al centro utilizando la clase text-center, y margen derecho 3-->
								<button type="button" class="btn-close ml-3" ></button>
							</div>
						</div>
						
						<!--USUARIO-->
						<div class="formulario_grupo  form-floating  mb-3" id="grupo_usuario">
						
						  <div class="formulario_grupo-input form-floating mb-3">
								<input type="text" class="formulario_input form-control" name="usuario" id="usuario" placeholder="kfjfh" required> <!--"form-control" le da estilo de formulario con bootstrap-->
								<label for="usuario" class="formulario_label"><i class="bi bi-person-fill"></i> Username</label>
								<i class="formulario_validacion-estado bi bi-patch-check-fill"></i>
							</div>
							<p class="formulario_input-error">El usuario debe tener minimo 4 caracteres y solo se admiten números, letras y guión bajo.</p>
						</div>

						<!--CONTRASEÑA-->
						<div class="formulario_grupo form-floating" id="grupo_password">
							
							<div class="form-floating">
								<input type="password" class="formulario_input form-control" name="password" id="password" placeholder="Password" minlength="8" pattern="([A-Za-z]+[0-9]+)|([0-9]+[A-Za-z]+)|([0-9]+[A-Za-z]+[0-9]+)|([A-Za-z]+[0-9]+[A-Za-z]+)" required>
								<label for="password" class="formulario_label"><i class="bi bi-lock-fill"></i> Password</label>
								<i class="formulario_validacion-estado bi bi-patch-check-fill"></i>
            	</div>
							<p class="formulario_input-error">La contraseña debe ser de 8 a 12 digitos y no debe ser igual al usuario</p>
						</div>
						
						<!--ENVIAR-->
						<div class="formulario_grupo formulario_grupo-btn-enviar d-grid my-4"><!-- la clase determina que se extienda en todo el ancho-->
							<p class="formulario_mensaje-exito" id="formulario_mensaje-exito">El formulario se envió correctamente</p>
							<button type="submit" class="btn btn-success btn-primary">Login</button> <!--la clase determina el estilo de boton-->
						</div>

						<!-- MENSAJE DE CAMPOS REQUERIDOS --> 
						<div class="formulario_mensaje col-12" id="formulario_mensaje">
            	<p><i class="fas fa-exclamation-circle"> <b>Error:</b> Debes completar todos los campos</i></p>
        		</div>
						
         	  
        		</div>
					</form>
				</div>
			</div>
		</div>
</section>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
		</script>
		<script src="JS/formulario.js"></script>
		
		
  </body>
    
</html>
