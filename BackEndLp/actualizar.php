<?php
    include('./config/conexion.php');
    $sql = "UPDATE evento SET nombre='" .$_POST['nombre'] ."', ubicacion='" .$_POST['ubicacion'] ."', descripcion='" .$_POST['descripcion'] ."', fecha='" .$_POST['fecha'] ."', categoriaId=" .$_POST['categoriaId'] .", usuarioId=" .$_POST['usuarioId'] ." WHERE id=" .$_POST['id'].";";
    $retval = mysqli_query( $conn, $sql );
    if(! $retval ){
        echo "No se ha podido actualizar el evento\n";
        die('Could not enter data: '  .mysqli_error($conn));
    }else{
        echo "Evento actualizado con exito!!!\n";
    }
    mysqli_close($conn);
?>