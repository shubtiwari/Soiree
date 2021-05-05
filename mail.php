<?php

        include 'conn.php';
        require  "C:\wamp64\www\Soiree\PHPMailer\PHPMailerAutoload.php "; 
        $to_email = $_GET['Email'];
        $date = 
        $mail = new PHPMailer;                      
        $mail->isSMTP(); 
        $mail ->Host="smtp.gmail.com"; 
        $mail->SMTPAuth   = true;                                          
        $mail->Username   = 'shubham.tiwari00077@gmail.com';                   
        $mail->Password   = 'yummchoco4@@';                                                                                                                             
        $mail->SMTPSecure = 'tls';       
        $mail->Port       = 587;                                   
        echo" $to_email";
        //Recipients
        $mail->setFrom('shubham.tiwari00077@gmail.com');
        $mail->addAddress($to_email);                 
        $mail->addReplyTo('shubham.tiwari00077@gmail.com' );

        //Content
        $mail->isHTML(true);                               
        $mail->Subject = 'Soiree Invitation';
        $mail->Body    = '<div class="w3-container w3-content w3-padding-64" style="max-width:800px" style="font-family:verdana," >            
                             <p> Dear Sir/Maam, </p> 
                                <p> I am pleased to infrom you that you are cordially invited to the Soiree.<br><br>
                                    This event will be organized at <b> THDC-IHET Campus,Tehri</b> and will be held on Date at 
                                    <b> 5<sup>th</sup>-June-2021 at 8:00pm.</b> A lunch has arranged in between the event to make it more enjoyable.
                                    <br><br><br><br>  Plese confirm your availibilty on or before Date:30-May-2021 by contacting us
                                        on <b>9690030963</b> or by emailing us at <b>shubham.tiwari00077@gmail.com</b>
                                    <br><br><br>  We look forward to your presence on the event Soiree. 
                                    <br><br> Thanks and Regards, <br> Shubham Tiwari </p>
                          </div> ';

        $mail->AltBody = '';
        if($mail->send()){
            echo"sucess";
        }
        else {
            echo"not sucess";
        }
        header("location:confirm.php");
?>