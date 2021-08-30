<?php
    include('./config/conexion.php');
    $sql = "SELECT * FROM evento";
    $retval = mysqli_query( $conn, $sql );
    if(! $retval ){
        echo "No se ha podido consultar los eventos\n";
        die('Could not fetch data: '  .mysqli_error($conn));
    }else{
        while($row = $retval->fetch_assoc()){
            echo $row['id'] ." " .$row['nombre'] ." " .$row['ubicacion'] ." " .$row['descripcion'] ." " .$row['fecha'] ." " .$row['categoriaId'] ." " .$row['usuarioId'] ."\n";
        }
        echo "Eventos consultados con exito!!!\n";
    }
    mysqli_close($conn);
?>
