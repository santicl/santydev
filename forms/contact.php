<?php

  $receiving_email_address = 'santicsuarezdev@gmail.com';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $header = "From: " . $mail . "\r\n";
  $header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
  $header .= "Mime-Version: 1.0 \r\n";
  $header .= "Content-Type: text/plain";

$send_msg = "Este mensaje es enviado por " . $name . ",\r\n";
$send_msg .= "El Email es: " . $mail . "\r\n";
$send_msg .= "Mensaje: " . $message . "\r\n";

$to = $receiving_email_address;
  mail($to, $subject, utf8_decode($send_msg), $header);
  header("Location: index.html");

//if (isset($_POST['message'])) {
//    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
//        $name = $_POST['name'];
//        $email = $_POST['email'];
//        $asunto = $_POST['subject'];
//        $mensaje = $_POST['message'];
//        $header = "From: $email"."\r\n";
//        $header = "Reply-To: $receiving_email_address"."\r\n";
//        $header = "X-Mailer: PHP/". phpversion();
//        $mail = @mail($receiving_email_address, $name, $asunto, $mensaje, $header);
//        if ($mail) {
//            echo 'Todo bien'
//        }
//    }
//}
  //$contact->to = $receiving_email_address;
  //$contact->from_name = $_POST['name'];
  //$contact->from_email = $_POST['email'];
  //$contact->subject = $_POST['subject'];

  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */
?>
