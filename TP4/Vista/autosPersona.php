<?php
include_once("../configuracion.php");
include_once("../Control/c_persona.php");
include_once("../Modelo/persona.php");
include_once("../Control/c_auto.php");
include_once("../Modelo/auto.php");
$objPersona = new c_persona();
$objAuto = new c_auto();
$datos = data_submitted();
$datosAuto = $objAuto->buscarDuenio($datos);
$obj = NULL;
if (isset($datos['NroDni'])) {
    $listaPersonas = $objPersona->buscar($datos);
    if (count($listaPersonas) == 1) {
        $obj = $listaPersonas[0];
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
                    <table class="table table-striped">
                        <tr>
                            <th>DNI</th>
                            <th>Apellido</th>
                            <th>Nombre</th>
                            <th>Fecha Nacimiento</th>
                            <th>Telefono</th>
                            <th>Domicilio</th>
                        </tr>
                        <tr>
                            <td><?php echo $obj->getNroDni(); ?></td>
                            <td><?php echo $obj->getApellido(); ?></td>
                            <td><?php echo $obj->getNombre(); ?></td>
                            <td><?php echo $obj->getFechaNac(); ?></td>
                            <td><?php echo $obj->getTelefono(); ?></td>
                            <td><?php echo $obj->getDomicilio(); ?></td>
                        </tr>
                    </table>
                </div>
                <div class="mb-3">
                    <h2>Autos:</h2>
                    <table class="table table-info table-striped"">
                            <tr>
                                <th>Patente</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                            </tr>
                            <?php
                            if (isset($datosAuto)) { //isset se fija si la variable tiene algo
                                foreach ($datosAuto as $auto) {
                                    echo '<tr>';
                                    echo '<td>' . $auto->getPatente() . '</td>';
                                    echo '<td>' . $auto->getMarca() . '</td>';
                                    echo '<td>' . $auto->getModelo() . '</td>';
                                    echo '</tr>';
                                }
                            } else {
                                echo '<p> Actualmente no hay autos registrados </p>';
                            }
                            ?>
                        </table>
                    </div>
                    <div>
                        <div class=" mb-3">
                        <a href="listaPersona.php" class="btn btn-dark">Volver</a>
                </div>
            </div>
        </div>
        </div>
<?php
    } else {
        echo ' <p class="lead"> No ingreso un DNI valido </p>';
    }
}

?>
</section>
</body>