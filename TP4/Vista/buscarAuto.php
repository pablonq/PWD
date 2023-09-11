<?php
    include_once("../configuracion.php");
    include_once("../Control/c_auto.php");
    include_once("../Modelo/auto.php");	
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
<div class="m-2">
    <form action="accionbuscarAuto.php" method="get" class="needs-validation col-md-4" novalidate>
        <div class="form-floating">
            <input type="text" class="form-control rounded-3" pattern="[A-Z]{3}\s[0-9]{3}" name="Patente" id="Patente" placeholder=" " required>
            <label for="Patente">Ingrese la patente</label>
            <div class="invalid-feedback">
                Porfavor ingrese una patente valida (3 letras en mayuscula, un espacio y 3 numeros)
            </div>

        </div>
        <div class="mt-2">
            <button type="submit" class="btn btn-dark">Buscar</button>
        </div>
    </form>
</div>
<script src="js/validarCamposVacios.js"></script>
</section>
</body>