<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "chocoart";

    $enlace = mysqli_connect ($servidor,$usuario,$clave,$baseDeDatos);

    //este if valida si el enlace a la base de datos funciona, si lo es dice abrio el enlace
    if ($enlace){ 
        echo "abrio el enlace"; 
    }
?>