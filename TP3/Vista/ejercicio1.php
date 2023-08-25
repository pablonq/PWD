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
		<!--BOOTSTRAP-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- BOOTSTRAP ICONO-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- CSS -->
    <link href="CSS/style4.css" rel="stylesheet">
    
    <title>Ejercicio 1</title>
  </head>
  <body>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-6">
          <form action="../Control/subir.php" method="post" enctype="multipart/form-data"> <!-- enctype="multipart/form-data" sirve para indicar que vamos a enviar archivos mediante este formulario-->
		        <div class="justify-content-center">
              <label for="formFile" class="form-label">Ejercicio 1</label>
              <input class="form-control" type="file" id="formFile" name="archivo">
            </div>
            <div class="d-flex mt-3">
              <button type="submit" class="btn btn-primary" value="Enviar">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
			

<script src="JS/formulario4.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 
		
		
  </body>
    
</html>