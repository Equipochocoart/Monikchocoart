<?php
include 'config.php';
// Eliminar el producto de la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["texto"];
    $sql = "DELETE FROM productos WHERE nombre_producto = '$id'";

    if ($enlace->query($sql) === TRUE) {
        echo "Campo Eliminado";
    } else {
        echo "Algo fallo y no se elimino";
    }
    $enlace->close();
}
?>
<html>
    <br>
    <a href="/chocoart/#">Administrador</a>
</html>