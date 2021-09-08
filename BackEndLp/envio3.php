<?php 
        require 'C:\xampp\htdocs\back\vendor\autoload.php';
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        include('./config/conexion.php');
        $sql = "SELECT * FROM evento";

        //$sql = "SELECT * FROM evento WHERE usuarioId = 1";
        $retval = mysqli_query( $conn, $sql );
        $idE=$_POST["id"];
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
        $subcadFecha = explode(" ", $fec);
        $fechaf=$subcadFecha[0];
        $fechaf= str_replace("-","",$fechaf);
        $horaI=$subcadFecha[1];
        $subcadHora = explode(":", $horaI);


        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = 'juan.alvarez.smtp@gmail.com';
        $mail->Password = 'snakemayor0';
        $mail->setFrom('juan.alvarez.smtp@gmail.com');
        $mail->addAddress($dest);
        $mail->WordWrap = 50;  
        $mail->isHTML(true); 
        //$mail->addReplyTo('juan.alvarez.smtp@gmail.com', 'MapasWebLP');

        $location = $ubi;
        $date = $fechaf;
        $startTime = $subcadHora[0].$subcadHora[1];
        $endTime= $subcadHora[0]."59";
        $subject= $nombreE;
        $desc= 'Este email es un recordatorio del evento';
    
        $organizer = 'El lider';
    
        $organizer_email = 'juan.alvarez.smtp@gmail.com';  
        $participant_name_1 = 'Kelvin';
        $participant_email_1= $dest; 
        
    
        $text = "BEGIN:VCALENDAR\r\n
        VERSION:2.0\r\n
        PRODID:-//Deathstar-mailer//theforce/NONSGML v1.0//EN\r\n
        METHOD:REQUEST\r\n
        BEGIN:VEVENT\r\n
        UID:" . md5(uniqid(mt_rand(), true)) . "example.com\r\n
        DTSTAMP:" . gmdate('Ymd').'T'. gmdate('His') . "Z\r\n
        DTSTART:".$date."T".$startTime."00Z\r\n
        DTEND:".$date."T".$endTime."00Z\r\n
        SUMMARY:".$subject."\r\n
        ORGANIZER;CN=".$organizer.":mailto:".$organizer_email."\r\n
        LOCATION:".$location."\r\n
        DESCRIPTION:".$desc."\r\n
        ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;RSVP=TRUE;CN".$participant_name_1.";X-NUM-GUESTS=0:MAILTO:".$participant_email_1."\r\n
        END:VEVENT\r\n
        END:VCALENDAR\r\n";
    
        $headers = "From: Sender\n";
        $headers .= 'Content-Type:text/calendar; Content-Disposition: inline; charset=utf-8;\r\n';
        $headers .= "Content-Type: text/plain;charset=\"utf-8\"\r\n"; #EDIT: TYPO
        $mail->Subject = $subject;
        $mail->Body = $desc; 
        $mail->AltBody = $text; // in your case once more the $text string
        $mail->Ical = $text; // ical format, in your case $text string
    

        if(!$mail->Send()) {
            echo "Error: " . $mail->ErrorInfo;
        } else {
            echo "Enviado!";
        }
?>