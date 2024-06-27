<?php
include("config.php");

if (isset($_POST['register'])) {
    $nombre = $_POST['nombre'];
    $imagen = $_POST['imagen'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $consulta = "INSERT INTO productos (nombre_producto, imagen_producto, descripcion, precio) 
                VALUES ('$nombre','$imagen','$descripcion','$precio')";
    $resultado = mysqli_query($enlace,$consulta);
    if ($resultado){
        ?>
        <H3>!guardado¡</H3>
        <a href="/chocoart/#">Administrador</a>
        <?php
    } else {
    ?>
        <H3>!algo fallo al guardar el producto¡</H3>
        <?php
    }
    }
    