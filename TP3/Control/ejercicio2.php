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
<?php 
if($_FILES['archivo']['error']==0){/* valida si se subio el archivo, el tipo de error en php valor 0 quiere decir q se cargo el archivo, un error distinto identifica un problema*/

  $dir="Almacen/";
  $ruta_carga=$dir.$_FILES['archivo']['name'];
  
  $permitidos=array('txt');
  $arregloArchivo=explode(".", $_FILES['archivo']['name']); /*arma un arreglo con el nombre y la extension*/
  $extension=strtolower(end($arregloArchivo));/* va a traer el ultimo componente del arreglo en minusculas osea la extension*/

  if(in_array($extension, $permitidos) ){ /*busca en el arreglo los permitidos*/
    if(!file_exists($dir)){ /*Si no existe la ruta se va a crear*/
      mkdir($dir, 0777); /*permiso para crear*/
    }
    if(move_uploaded_file($_FILES['archivo']['tmp_name'],$ruta_carga )){
      echo "Archivo subido con exito";
      $ContenidoArchivo=fopen($ruta_carga,"r"); /* El argumento "r" indica que solo se puede leer el archivo, si utilizo "w" puedo escribir en el archivo, esta funcion debe tener como argumento el archivo en si, no un string */
      $contenido =fgets($ContenidoArchivo); /* Obtiene el contenido, trabaja con el archivo */
      echo'<textarea name="textarea_datosingresados" id="textarea_datosingresados" disabled cols="50" rows="10">'.$contenido . '</textarea>';
      fclose ($ContenidoArchivo );/*cierra el archivo*/

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