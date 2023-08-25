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
		<div class='modal-header border-bottom-0'>
      <h1>La pelicula introducida es</h1>
    </div>

    <div class="row">
			<h3>Titulo: </h3><p><?php $titulo=$_GET['titulo']; echo $titulo;  ?></p><br>
			<h3>Actores: </h3><p><?php $actores=$_GET['actores']; echo $actores;  ?></p><br>
			<h3>Director: </h3><p><?php $director=$_GET['director']; echo $director;  ?></p><br>
			<h3>Guion: </h3><p><?php $guion=$_GET['guion']; echo $guion;  ?></p><br>
			<h3>Producción: </h3><p><?php $produccion=$_GET['produccion']; echo $produccion;  ?></p><br>
			<h3>Año: </h3><p><?php $anio=$_GET['anio']; echo $anio;  ?></p><br>
			<h3>Nacionalidad: </h3><p><?php $nacionalidad=$_GET['nacionalidad']; echo $nacionalidad;  ?></p><br>
			<h3>Genero: </h3><p><?php $genero=$_GET['genero']; echo $genero;  ?></p><br>
			<h3>Duración: </h3><p><?php $duracion=$_GET['duracion']; echo $duracion;  ?></p><br>
			<h3>restricciones de Edad: </h3><p><?php $restricciones=$_GET['restricciones']; echo $restricciones;  ?></p><br>						
		</div>

<?php 
if($_FILES['archivo']['error']==0){/* valida si se subio el archivo, el tipo de error en php valor 0 quiere decir q se cargo el archivo, un error distinto identifica un problema*/

  $dir="Almacen/";
  $ruta_carga=$dir.$_FILES['archivo']['name'];
  
  $permitidos=array('png','jpeg','bmp','jpg');
  $arregloArchivo=explode(".", $_FILES['archivo']['name']); /*arma un arreglo con el nombre y la extension*/
  $extension=strtolower(end($arregloArchivo));/* va a traer el ultimo componente del arreglo en minusculas osea la extension*/

  if(in_array($extension, $permitidos) ){ /*busca en el arreglo los permitidos*/
    if(!file_exists($dir)){ /*Si no existe la ruta se va a crear*/
      mkdir($dir, 0777); /*permiso para crear*/
    }
    if(move_uploaded_file($_FILES['archivo']['tmp_name'],$ruta_carga )){
      echo "Archivo subido con exito";


    }   else{
      echo"Error al cargar el archivo";
    };

    } else {
      echo  "Formato invalido";
    }
}else{
  echo"No se ha cargado nada";
}

?>

<script src="JS/formulario4.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 
		
		
  </body>
    
</html>