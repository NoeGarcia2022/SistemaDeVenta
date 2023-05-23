<?php

    require_once "../../clases/Conexion.php";
    require_once "../../clases/Articulos.php";

    $obj = new articulos();

    $datos = array(
        $_POST['categoriaSelect'],
        $_POST['nombre'],
        $_POST['descripcion'],
        $_POST['cantidad'],
        $_POST['precio']
                    );

    $nombreImg = $_FILES['imagen']['name'];
    $rutaAlmacenamiento = $_FILES['imagen']['tmp_name'];
    $carpeta = '../../archivos/';
    $rutaFinal = $carpeta.$nombreImg;

    $datos = array(
        $_POST['categoriaSelect'],
        $nombreImg,
        $rutaFinal
    );

    if (move_uploaded_file($rutaAlmacenamiento, $rutaFinal)) {
       echo $idimagen = $obj->agregaImagen($datos);
    }
    
?>