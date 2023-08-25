
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
	
        <title>Respuestas</title>
    </head>
    <body>
			
			<section class="eje1 seccion-clara">
				<div class="container text-center">
					<div class="row">
						<!-- Respuesta 1 -->
						<div class="columna col-12 col-md-3">
							<p class="ejercicios-titulo">Respuesta Ej1</p>
        				<?php
                  $numero=$_GET['input_numero'];
                  if(empty($numero)){
                    echo"<p class='error'> El campo está vacio</p>";
                  }
                  if(!is_numeric($numero)){
                    echo "<p class='error'>El valor no es un número.</p>";
                  }
									if ($numero>0) {
										echo "<p class='ejercicios-respuesta'>El valor".$numero." es positivo</p>";
									}
									if($numero<0){
										echo"<p class='ejercicios-respuesta'> El valor". $numero." es negativo</p>";
									}
									if($numero==0){
                    echo "<p class='ejercicios-respuesta'> El valor es cero</p>";
                  }
                ?>
								<div class="mb-3">
                    <a href= "ejercicios_TP.php" class="btn btn-primary">Volver</a>
                </div>	
            </div>
						
						<!-- Ejercicio 2 -->
						<div class="columna col-12 col-md-3">
            <p class="ejercicios-titulo">Respuesta Ej2</p>
            <?php
            $arraydias=[$_GET['lunes'],$_GET['martes'],$_GET['miercoles'],$_GET['jueves'],$_GET['viernes']];
            $suma=0;
            for($i=0; $i<count($arraydias); $i++){
              $suma=$suma+$arraydias[$i];
              }
            echo "<p class='ejercicios-respuesta'>Las horas catedra de la semana son: ".$suma."</p>";
            ?>
            </div>


						<!-- Ejercicio 3 -->
						<div class="columna col-12 col-md-3">
            <p class="ejercicios-titulo">Respuesta Ej3</p>
            <?php
            echo "<p class='ejercicios-respuesta'> Hola, yo soy ".$_POST['nombre'].", ".$_POST['apellido']." tengo ".$_POST['edad']." años y vivo en ".$_POST['direccion']."</p>";
            ?>

						</div>
            <!-- Ejercicio 4 -->
						<div class="columna col-12 col-md-3">
            <p class="ejercicios-titulo">Respuesta Ej4</p>
            <?php
            if($_POST['edad']>=18){
              echo"<p class='ejercicios-respuesta'>".$_POST['nombre']." es mayor de edad </p>";

            }
            if($_POST['edad']<18){
              echo"<p class='ejercicios-respuesta'>".$_POST['nombre']." es menor de edad </p>";

            }
            ?>

					</div>

				</div> 
			</section>
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
    
</html> 