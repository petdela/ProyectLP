<?php 
        include('./config/conexion.php');
        $sql = "SELECT * FROM evento";

        //$sql = "SELECT * FROM evento WHERE usuarioId = 1";
        $retval = mysqli_query( $conn, $sql );
        $idE=$_GET["id"];
        $dest=$_POST["correo"];
        $nombreE="";
        $ubi="";
        $desc="";
        $fec="";
        $cat="";
        if(! $retval ){
            die('Could not enter data: '  .mysqli_error($link));
        }else{
            while($row = $retval->fetch_assoc()){
                echo $row['id'] ." " .$row['nombre'] ." " .$row['ubicacion'] ." " .$row['descripcion'] ." " .$row['fecha'] ." " .$row['categoriaId'] ." " .$row['usuarioId'] ."\n";
                
                if($row['id']==$idE){
                    $nombreE= $row['nombre'];
                    $ubi= $row['ubicacion'];
                    $desc=$row['descripcion'];
                    $fec =$row['fecha'];
                    $cat=$row['categoriaId'];
                }
            }
            echo "Eventos consultados con exito!!!\n";
        }
        mysqli_close($conn);
    


        //$destinatario = "petdela@espol.edu.ec";
        $destinatario = $dest;
        $asunto = "Evento de calendario"; 
        $cuerpo = ' 
        <html> 
        <head> 
           <title>Prueba de correo</title> 
        </head> 
        <body> 
        <h1>Hola amigos!</h1> 
        <p> 
        <b>Bienvenidos a mi correo electrónico de prueba</b>.  
        </p> 
        </body> 
        </html> 
        '; 
        
        //para el envío en formato HTML 
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
        
        //dirección del remitente 
        $headers .= "From: Petter De la Cruz <juan.alvarez.smtp@gmail.com>\r\n"; 
        //mail($destinatario,$asunto,$cuerpo,$headers)
?>


