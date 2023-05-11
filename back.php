<?php


//chama as id do front
if (isset($_POST['destinatario'], $_POST['assunto'], $_POST['corpo'])) {
    $destinatario = $_POST['destinatario'];
    $assunto = $_POST['assunto'];
    $corpo = $_POST['corpo'];

}

require_once ("src/SMTP.php");
require_once ("src/PHPMailer.php");
require_once ("src/Exception.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//php mailer envia o email

try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'leonardomx500@gmail.com';
    $mail->SMTPSecure = 'tls';
    $mail->Password = 'qfwhegwinqytpitn';
    $mail->setFrom('leonardomx500@gmail.com');
    $mail->addAddress($destinatario);
    $mail->Port = 587;
    $mail->isHTML(true);
    $mail->Subject = $assunto;
    $mail->Body = $corpo;
    
    if($mail->send()) {
        $response =  array ('message' => 'E-mail enviado com sucesso para ' . $destinatario . '!');
      } else {
        // $response =  'Erro ao enviar o e-mail.';
      }
    } catch (Exception $e){
      $response = array ('message' => 'Ótimo, parece que você preenchou todos os campos, pórem o campo destinatário precisa ter um email válido.');
    }
  
    echo json_encode($response);