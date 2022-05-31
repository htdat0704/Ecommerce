<?php
require_once 'PHPMailer/PHPMailerAutoload.php';

  //#1
  $to_id = 'hodat402@gmail.com';
  $message = $_POST['message'];
  $subject = $_POST['subject'];

  echo $to_id;
  echo $message;
  echo $subject;
  //#2
  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com;smtp1.example.com;smtp2.example.com';
  $mail->Port = 587;
  $mail->SMTPSecure = 'tls';
  $mail->SMTPAuth = true;
  $mail->Username = 'htdat.18it3@sict.udn.vn';
  $mail->Password = 'gxmbbkdvzqwxjvro';
  $mail->FromName = "Demo Send Mail";

  //#3
  $mail->addAddress($to_id);
  $mail->Subject = $subject;
  $mail->msgHTML($message);

  //#4
  if (!$mail->send()) {
    $error = "Lỗi: " . $mail->ErrorInfo;
    echo 'Failed';
  }
  else {
    echo 'success';
  } 


?>