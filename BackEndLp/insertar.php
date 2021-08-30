<?php
    include('./config/conexion.php');
    $sql = "INSERT INTO evento(nombre, ubicacion, descripcion, fecha, categoriaId, usuarioId) VALUE ('".$_POST['nombre'] ."', '" .$_POST['ubicacion'] ."', '" .$_POST['descripcion'] ."', '" .$_POST['fecha'] ."', '" .$_POST['categoriaId'] ."', '" .$_POST['usuarioId'] ."');";
    $retval = mysqli_query( $conn, $sql );
    if(! $retval ){
        echo "No se ha podido insertar el evento\n";
        die('Could not enter data: '  .mysqli_error($conn));
    }else{
        echo "Evento insertado con exito!!!\n";
    }
    mysqli_close($conn);
?>