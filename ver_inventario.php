<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Inventario</title>
</head>
<body>
    <br>
    <table>
        <tr>
            <td>Nombre</td>
            <td>descripcion</td>
            <td>precio</td>
        </tr>
<?php
    $sql="SELECT * FROM productos ORDER BY nombre_producto ASC";
    $result=mysqli_query($enlace,$sql);
    while($mostrar=mysqli_fetch_array($result)){
?>
        <tr>
            <td><?php echo $mostrar['nombre_producto']?></td>
            <td><?php echo $mostrar['descripcion']?></td>
            <td><?php echo $mostrar['precio']?></td>            
        </tr>

<?php
    }
?>
    <a href="/chocoart/#">Administrador</a>
</body>
</html>