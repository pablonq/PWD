
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
        <form action="accionNuevaPersona.php" method="post" class="needs-validation row-md-4" novalidate>
            <div>
                <label>Nombre: </label><input type="text" pattern="[a-zA-Z]+\s?[a-zA-Z]*\s?[a-zA-Z]*\s?[a-zA-Z]*\s?[a-zA-Z]*" name="Nombre" minlength="3" id="input_nombre" class="form-control text" required>
                <div class="invalid-feedback">
                    Porfavor ingrese un nombre valido! No se aceptan numeros y tiene que ser mayor a 3 letras.
                </div>
                </div>
            <div>
                <label>Apellido: </label><input type="text" pattern="[a-zA-Z]+\s?[a-zA-Z]*\s?[a-zA-Z]*" name="Apellido" minlength="3" id="input_apellido" class="form-control text" required>
                <div class="invalid-feedback">
                    Porfavor ingrese un apellido valido! No se aceptan numeros y tiene que ser mayor a 3 letras.
                </div>
                
            </div>
            <div>
                <label>Documento: </label><input type="number" name="NroDni" min="1000000" id="input_documento" class="form-control" required>
                <div class="invalid-feedback">
                    Porfavor ingrese una Documento!
                </div>
                
            </div>
            <div>
                <label>Telefono: </label><input type="number" name="Telefono" max="9999999999" id="input_telefono" class="form-control" required>
                <div class="invalid-feedback">
                    Porfavor ingrese un telefono!
                </div>
                
            </div>
            <div>
                <label>Direccion: </label><input type="text" pattern="[a-zA-Z]+\s?[0-9]*" name="Domicilio" id="input_direccion" class="form-control" required>
                <div class="invalid-feedback">
                    Porfavor ingrese una direccion valida! No se aceptan solamente numeros
                </div>
                
            </div>
            <div>
                <script src="js/InputFecha.js"></script>
                <div class="invalid-feedback">
                    Porfavor ingrese fecha valida!
                </div>
                
            </div>
            <input type="submit" name="boton_enviar" class="btn btn-dark mt-2" id="boton_enviar" value="Cargar">
        </form>
    </div>
</div>
<script src="js/validarCamposVacios.js"></script>

</SECtion>
</body>
