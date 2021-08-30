<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = '';
    $db = 'proyectolpsmr';
    $conn = mysqli_connect($servidor, $usuario, $contrasena, $db);

    if (! $conn ){
        echo "No se pudo conectar a la base SQL\n";
        die('Could not connect: ' . mysqli_error($conn));
    }else{
        echo "Conectado de forma exitosa\n";
    }
?>