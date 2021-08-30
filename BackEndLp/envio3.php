<?php 
        $servidor = 'localhost:3307';
        $usuario = 'root';
        $contrasena = '';
        $base = 'baselp';

        $link = mysqli_connect($servidor,$usuario,$contrasena,$base);
 
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
 
        //echo "Connect Successfully. Host info: " . mysqli_get_host_info($link)."\n";

        $sql = "SELECT * FROM evento WHERE usuarioId = 1";
        $retval = mysqli_query( $link, $sql );
        if(! $retval ){
            //echo "No se ha mostrar el evento asociado\n";
            die('Could not enter data: '  .mysqli_error($link));
        }else{
            while($row = $retval->fetch_assoc()){
                echo "Datos del eventos que asistes:";
                echo $row['id'] ." " .$row['nombre'] ." " .$row['ubicacion'] ." " .$row['descripcion'] ." " .$row['fecha'] ." " .$row['categoriaId'] ." " .$row['usuarioId'] ."\n";
            }
            //echo "Numero de eventos que asistes es: " . $retval -> num_rows."\n";
            //echo "Evento:".$retval."\n";
        }
        mysqli_close($link);
    


        $destinatario = "petdela@espol.edu.ec"; 
        $asunto = "Este mensaje es de prueba"; 
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


