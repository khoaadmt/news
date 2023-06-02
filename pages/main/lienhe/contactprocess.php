<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

		$message = $_POST['message'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		
	//Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    
    
    //Load Composer's autoloader
    require 'vendor/autoload.php';
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {
        //Server settings                  
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'khoaadmt@gmail.com';                     //SMTP username
        $mail->Password   = 'pvnyewnccqyqdvkw';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('khoaadmt@gmail.com', 'AZ NEWS');
        $mail->addAddress('chinnen1603@gmail.com', 'test');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('');
        // $mail->addBCC('bcc@example.com');
    
        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    =  'Message: ' . $message . '<br>' .
                          'Name: ' . $name . '<br>' .
                          'Email: ' . $email . '<br>' .
                          'Subject: ' . $subject;
       // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    // if ($mail) {
        $response = array('success' => true);
      // } else {
      //   $response = array('success' => false);
      // }
      
      header('Content-Type: application/json');
      echo json_encode($response);
?>