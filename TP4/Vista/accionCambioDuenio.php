<?php
include_once("../configuracion.php");
include_once("../Control/c_persona.php");
include_once("../Modelo/persona.php");
include_once("../Control/c_auto.php");
include_once("../Modelo/auto.php");
$metodo = data_submitted();
$objAuto = new c_auto();
$objPersona = new c_persona();
$datosAuto = $objAuto->buscar($metodo);
$nroDni["NroDni"] = $metodo["DniDuenio"];
$datosPersona = $objPersona->buscar($nroDni);
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
        <h2>Resultado la busqueda:</h2>
        <div class="mb-3">
            <?php
            if ($datosAuto != null) {
                if ($datosPersona != null) {
                    $datosModificados = ["Patente" => $metodo["Patente"], "DniDuenio" => $metodo["DniDuenio"], "Marca" => $datosAuto[0]->getMarca(), "Modelo" => $datosAuto[0]->getModelo()];
                    if ($objAuto->modificacion($datosModificados)) {
                        echo '<p class="lead text-success"> Los datos se modificaron correctamente!</p>';
                    } else {
                        echo '<p class="lead text-danger"> Es el mismo dueño!</p>';
                    }
                } else {
                    echo '<p class="lead text-danger"> La persona no se encuentra en la base de datos!</p>';
                }
            } else {
                echo ' <p class="lead text-danger">El auto no se encuentra en la base de datos!</p>';
            }
            ?>
        </div>
        <div>
            <div class="mb-3">
                <a href="cambioDuenio.php" class="btn btn-dark">Volver</a>
            </div>
        </div>
    </div>
</div>
</section>
              </body>
</html>