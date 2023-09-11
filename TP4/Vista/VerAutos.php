<?php
    include_once("../configuracion.php");
		include_once("../Control/c_auto.php");	
    $objAuto = new c_auto();
    $datosAuto = $objAuto->buscar(NULL);
?>
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
<div  class="container-fluid">
        <div class="container col-md-10">
            <h2>Autos cargados:</h2>
            <div class="mb-3">
                    <table class="table table-striped">
                        <tr>
                            <th>Patente</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>DNI dueño</th>
                            <th>Nombre y apellido dueño</th>
                            <th></th>
                        </tr>
                        <?php
                            $arrayDNI=["NroDni" => ""]; 
                            if(isset($datosAuto)){ //isset se fija si la variable tiene algo
                                foreach ($datosAuto as $auto){ 
                                    echo '<tr>';
                                    echo '<td>'. $auto->getPatente().'</td>';
                                    echo '<td>'. $auto->getMarca().'</td>';
                                    echo '<td>'. $auto->getModelo().'</td>';
                                    echo '<td>'. $auto->getObjPersona()->getNroDni().'</td>';
                                    echo '<td>' . $auto->getObjPersona()->getNombre() . " " . $auto->getObjPersona()->getApellido() . '</td>';
                                    echo '<td><a href="accionEliminarAuto.php?Patente='.$auto->getPatente().'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16"><path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/></svg></a></td>';
                                    echo '</tr>'; 
                                }
                            }else{
                                echo '<p class="lead"> No hay autos cargados </p>';
                            }
                        ?>
                    </table>
            </div>
        </div>
</div>
													</section>
													</body>

