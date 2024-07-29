<?php
    //composer require phpmailer/phpmailer
    // PHPMailer()
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    //Carregando arquivo do composer
    require 'vendor/autoload.php';

    //Criando instancia do PHP
    $mail = new PHPMailer(true);

    try{
        //code...
         //Server settings
                     //Enable verbose debug output
    $mail->isSMTP();                                                         
    $mail->Host       = 'smtp-mail.outlook.com';                
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'programacaoprojeto@outlook.com';                   
    $mail->Password   = '!Progr4macao9_';                              
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
    $mail->Port       = 587;
    $mail->CharSet    = 'UTF-8';

    //Destinatarios
    $mail->setFrom('programacaoprojeto@outlook.com', 'PC Prevenido');
    $mail->addAddress('adegaidrink@hotmail.com', 'Adega I\'drink');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

     //Conteúdo do email
     $mail->isHTML(true);                                  //Set email format to HTML
     $mail->Subject = 'Saudação';
     $mail->Body    = 'Salve meu mano como você está ? Um  <strong> excelente<strong> dia para você !!!';
     $mail->AltBody = 'Aqui tenho o texto alternativo do meu email.';

     $mail->send();
    echo "até agora, tudo certo...";

} catch (Exception $e) {
            echo "Erro ao enviar o email: {$mail->ErrorInfo}";
}