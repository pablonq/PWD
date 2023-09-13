<?php
include_once("../configuracion.php");
include_once("../Control/c_persona.php");
include_once("../Modelo/persona.php");
include_once("../Control/c_auto.php");
include_once("../Modelo/auto.php");
$metodo = data_submitted();
$objPersona = new c_persona();
$datosPersona = $objPersona->buscar($metodo);
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
    <div class="container col-md-5">
        <?php
        if ($datosPersona != null) {
        ?>
            <form action="actualizarDatosPersona.php" method="get" class="needs-validation" novalidate>
                <div>
                    <label class="mt-3">Nombre: </label><input type="text" name="Nombre" id="Nombre" class="form-control" required value="<?php echo $datosPersona[0]->getNombre() ?>" pattern="[a-zA-Z]+\s?[a-zA-Z]*\s?[a-zA-Z]*\s?[a-zA-Z]*\s?[a-zA-Z]*">
                    <div class="invalid-feedback">
                        Porfavor ingrese un nombre valido!
                    </div>
                    
                </div>
                <div>
                    <label class="mt-3">Apellido: </label><input type="text" name="Apellido" id="Apellido" class="form-control" required value="<?php echo $datosPersona[0]->getApellido() ?>" pattern="[a-zA-Z]+\s?[a-zA-Z]*\s?[a-zA-Z]*">
                    <div class="invalid-feedback">
                        Porfavor ingrese un apellido valido!
                    </div>
                    
                </div>
                <div>
                    <label class="mt-3">Documento: </label><input type="text" name="NroDni" id="NroDni" class="form-control" value="<?php echo $datosPersona[0]->getNroDni() ?>" disabled>
                    <div class="d-none">
                        <input type="text" name="NroDni" id="NroDni" class="form-control" value="<?php echo $datosPersona[0]->getNroDni() ?>">
                    </div>
                </div>
                <div>
                    <label class="mt-3">Telefono: </label><input type="number" name="Telefono" id="Telefono" class="form-control" required value="<?php echo $datosPersona[0]->getTelefono() ?>" max="9999999999">
                    <div class="invalid-feedback">
                        Porfavor ingrese un numero de telefono valido! maximo 10 digitos.
                    </div>
                    
                </div>
                <div>
                    <label class="mt-3">Direccion: </label><input type="text" name="Domicilio" id="Domicilio" class="form-control" required value="<?php echo $datosPersona[0]->getDomicilio() ?>" pattern="[a-zA-Z]+\s?[0-9]*\s?[a-zA-Z]*\s?[0-9]*\s?[a-zA-Z]*\s?[0-9]*">
                    <div class="invalid-feedback">
                        Porfavor ingrese una direccion valida! calle y numero o calle, numero, dpto, numero, piso y numero.
                    </div>
                    
                </div>
                <div>
                    <script src="js/InputFecha.js"></script>
                    <div class="invalid-feedback">
                        Porfavor ingrese una fecha valida!
                    </div>
                    
                </div>
                <div class="mt-2">
                    <a href="buscarPersona.php" class="btn btn-dark">Volver</a>
                    <button type="submit" class="btn btn-dark">Modificar</button>
                </div>
            </form>
        <?php
        } else {
            echo ' <p class="lead text-danger">La persona ingresada no existe en la base de datos!</p>';
            echo '<a href="buscarPersona.php" class="btn btn-dark">Volver</a>';
        }
        ?>

    </div>
</div>
<script src="js/validarCamposVacios.js"></script>
</section>
              </body>
</html>