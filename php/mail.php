<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';


$name = $_POST['user_name'];
$phone = $_POST['user_phone'];

$mail = new PHPMailer();
$mail->CharSet = 'utf-8';

try {
    //Server settings
    // $mail->SMTPDebug = 4;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'maxwellviksna@gmail.com';                     // SMTP username
    $mail->Password   = '9S2tKpauhq4JK3p';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('maxwellviksna@gmail.com');
    $mail->addAddress('ViksnaMax@mail.ru');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Заявка на обратный звонок';
    $mail->Body    = 'Заявка от пользователя с имененм <b>'.$name.'</b>, с номер телефона <b>'.$phone.'</b>.';

    $mail->send();

    echo "success";
    // echo 'Message has been sent';
} catch (Exception $e) {
    echo $e->errorMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}

// $mail->SMTPDebug = 3;                               // Enable verbose debug output
//
// $mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = '9166973460@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
// $mail->Password = 'ROME'; // Ваш пароль от почты с которой будут отправляться письма
// $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров
//
// $mail->setFrom('9166973460@mail.ru'); // от кого будет уходить письмо?
// $mail->addAddress('ViksnaMax@mail.ru');     // Кому будет уходить письмо
// //$mail->addAddress('ellen@example.com');               // Name is optional
// //$mail->addReplyTo('info@example.com', 'Information');
// //$mail->addCC('cc@example.com');
// //$mail->addBCC('bcc@example.com');
// //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
// $mail->isHTML(true);                                  // Set email format to HTML
//
// $mail->Subject = 'Заявка с Спецтранс КАРГО сайта';
// $mail->Body    = '' .$name. ' оставил заявку, его телефон ' .$phone. '<br>';
// $mail->AltBody = '';
//
// if(!$mail->send()) {
//     echo 'Message could not be sent.';
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//     echo 'Message has been sent';
// }
?>
