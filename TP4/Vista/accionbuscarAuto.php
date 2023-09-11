<?php
include_once("../configuracion.php");
include_once("../Control/c_auto.php");
include_once("../Modelo/auto.php");
$metodo = data_submitted();
$objAuto = new c_auto();
$datosAuto = $objAuto->buscar($metodo);
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
<div class="container-fluid">
    <div class="container col-md-10">
        <h2>Resultado de la busqueda:</h2>
        <div class="mb-3">
            <?php
            if (isset($datosAuto)) {
            ?>
                <table class="table table-striped">
                    <tr>
                        <th>Patente</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Dueño</th>
                    </tr>
                    <tr>
                        <td><?php echo $datosAuto[0]->getPatente(); ?></td>
                        <td><?php echo $datosAuto[0]->getMarca(); ?></td>
                        <td><?php echo $datosAuto[0]->getModelo(); ?></td>
                        <td><?php echo $datosAuto[0]->getObjPersona()->getNroDni(); ?></td>
                    </tr>
                </table>
            <?php
            } else {
                echo ' <p class="lead text-danger"> La patente no se encuentra en la base de datos. </p>';
            }
            ?>
        </div>
        <div>
            <div class="mb-3">
                <a href="buscarAuto.php" class="btn btn-dark">Volver</a>
            </div>
        </div>
    </div>
</div>
        </section>
        </body>