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
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- BOOTSTRAP ICONO-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- CSS -->
    <link href="CSS/style4.css" rel="stylesheet">
    
    <title>Ejercicio 4</title>
  </head>
  <body>
		
		
			<div class="container mt-5">
				<div class="row justify-content-center">
					<div class="col-md-12">
				
					<form class="formulario needs-validation row g-3" id="formulario" action="../Control/ejercicio3.php" method="post" novalidate>
						<div class="titulo  pl-0 mt-4">
							<h5 class="bg-gray text-blue p-2"><i class="bi bi-pencil-square"></i>Cinem@s</h5>
						</div>	
						<div class="col">
						<!--TITULO-->	
							<div class="formulario_grupo mb-3" id="grupo_titulo">
								<label class="formulario_label form-label mb-0">Titulo</label>
								<div class="formulario_grupo-input">
									<input type="text" class="formulario_input form-control" id="titulo" name="titulo" placeholder="The Godfather" required>
								</div>
							</div>

						<!--DIRECTOR-->		
							<div class="formulario_grupo col-12 mb-3" id="grupo_director">
								<label class="formulario_label form-label mb-0">Director</label>
								<div class="formulario_grupo-input">
									<input type="text" class="formulario_input form-control" id="director" name="director" placeholder="Coppola" required>
								</div>
							</div>

						<!--PRODUCCION-->	
							<div class="formulario_grupo col-12 mb-3" id="grupo_produccion">
								<label class="formulario_label form-label mb-0">Produccion</label>
								<div class="formulario_grupo-input">	
									<input type="text" class="formulario_input form-control" id="produccion" name="produccion" required>
								</div>
							</div>

						<!--NACIONALIDAD-->		
							<div class="formulario_grupo col-12 mb-3" id="grupo_nacionalidad">
								<label class="formulario_label form-label mb-0">Nacionalidad</label>
								<div class="formulario_grupo-input">
									<input type="text" class="formulario_input form-control" id="nacionalidad" name="nacionalidad" placeholder="Argentino, Ruso, Frances" required>
								</div>
							</div>

						<!--DURACION-->		
							<div class="formulario_grupo col-4 mb-3" id="grupo_duracion">
								<label class="formulario_label form-label mb-0">Duracion</label>
								<div class="formulario_grupo-input d-flex align-items">
									<input type="number" class="formulario_input form-control" id="duracion" name="duracion" placeholder="999" required><p class="py-0">(minutos)</p>
								</div>
							<div>
							<p class="formulario_input-error pt-0 pb-3">La duración debe tener 3 digitos como maximo</p>
							</div>	
							</div>

              <!-- Seleccion de Archivo -->
            <div class="formulario_grupo col-12 mb-3" id="grupo_imagen">
              <label class="formulario_label form-label ">Imagen de la Pelicula</label>
              <div class="justify-content-center">
                <input class="formulario_input form-control" type="file" id="formFile" name="archivo">
              </div>
            </div>
							
						</div>

							
						<div class="col">
							<!--ACTORES-->
							<div class="formulario_grupo col-12 mb-3" id="grupo_actores">
								<label class="formulario_label form-label mb-0">Actores</label>
								<div class="formulario_grupo-input">
									<input type="text" class="formulario_input form-control" id="actores" name="actores" required >
								</div>
							</div>

						<!--GUION-->	
							<div class="formulario_grupo col-12 mb-3" id="grupo_guion">
								<label class="formulario_label form-label mb-0">Guion</label>
								<div class="formulario_grupo-input">	
									<input type="text" class="formulario_input form-control" id="guion" name="guion" required>
								</div>
							</div>
							
						<!--AÑO-->
							<div class="formulario_grupo col-2 mb-3" id="grupo_anio">
								<label  class="formulario_label form-label mb-0">Año</label>
								<div class="formulario_grupo-input">
									<input type="number" class="formulario_input form-control" id="anio" name="anio" required>
								</div>
								<div>
									<p class="formulario_input-error pt-0 pb-3">El año debe tener 4 digitos como maximo</p>
								</div>
							</div>
						
						<!--GENERO-->	
							<div class="formulario_grupo col-3 mb-3" id="grupo_genero">
								<label  class="formulario_label form-label mb-0">Genero</label>
								<div class="formulario_grupo-input">
									<select id="genero" name="genero" class="formulario_input form-select" required>
										<option selected>Elije...</option>
										<option>Comedia</option>
										<option>Drama</option>
										<option>Terror</option>
										<option>Romanticas</option>
										<option>Suspenso</option>
										<option>Otras</option>
									</select>
								</div>
							</div>
							
						<!--EDAD-->	
							<div class="formulario_grupo mb-3" id="grupo_edad">
          			<label class="formulario_label mb-2">Restricciones de edad</label>
								<div class="formulario_grupo-input">
	            		<input type="radio" name="edad" id="todolospublicos" value="Todo los publicos" class="formulario_input form-check-input" required><label class="formulario_label etiqueta form-check-label">Todo los publicos</label>
  	          		<input type="radio" name="edad" id="mayores7" value="Mayores a 7 años" class="formulario_input form-check-input" required><label class="formulario_label form-check-label"> Mayores a 7 años</label>
    	        		<input type="radio" name="edad" id="mayores18" value="Mayores a 18 años" class="formulario_input form-check-input" required><label class="formulario_label form-check-label"> Mayores a 18 años</label>
								</div>
								<div class="invalid-feedback">
								Es necesario ingresar el sexo
								</div>
							</div>
						</div>

						<!--SINOPSIS-->	
						<div class="row">
							<div class="formulario_grupo mb-3" id="sinopsis">
								<label class="formulario_label form-label">Sinopsis</label>
								<div clas="formulario_grupo-input">
									<textarea class="formulario_input form-control" id="sinopsis" rows="3" name="sinopsis" required></textarea>
								</div>
							</div> 
						</div>

						<!--ENVIAR-->	
						<div class="">
							<div class="row justify-content-center pb-3 align-items-center">
								<div class="col-6">
									<div class="formulario_grupo formulario_grupo-btn-enviar d-flex justify-content-between">
										
										<button type="submit" class="formulario_btn btn btn-primary" value="Enviar">Enviar</button>
										<button type="reset" class="formulario_btn btn btn-secondary">Borrar</button>
									</div>
									<p class="formulario_mensaje-exito" id="formulario_mensaje-exito">El formulario se envió correctamente</p>	
								</div>
							</div>
						</div>
            
            </div>
						
					</form>
						
					
					</div>
				</div>	
			</div>
			

<script src="JS/formulario4.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 
		
		
  </body>
    
</html>