<?php

/*
if (isset($_POST['destinatario'], $_POST['assunto'], $_POST['corpo'])) {
    $destinatario = $_POST['destinatario'];
    $assunto = $_POST['assunto'];
    $corpo = $_POST['corpo'];

}




$message = "DEU CERTO!!!";

$resultado = mail('leonardomx500@gmail.com', 'aaaaaa', $message);

if($resultado == true){
    echo "1".$message;
} else {
    echo "se fudeu";
}

    


------------------------------------------------------------





if (isset($_POST['destinatario'], $_POST['assunto'], $_POST['corpo'])) {
    $destinatario = $_POST['destinatario'];
    $assunto = $_POST['assunto'];
    $corpo = $_POST['corpo'];
    $resultado = mail($destinatario, $assunto, $corpo);
    
    // Verificar se o e-mail foi enviado com sucesso
    if ($resultado) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail.";
    }
}
----------------------------------------------------------------------
 var_dump($assunto);


----------------------------------------------------------------------
   
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = '@GMAIL.COM';
            $mail->SMTPSecure = 'ssl';
            $mail->Password = '4488abcd2266';
            $mail->setFrom('Teste');
            $mail->addAddress($destinatario);
            $mail->Port = 465;
            $mail->isHTML(true);
            $mail->Subject = $assunto;
            $mail->Body = $corpo;
            if($mail->send()){
                echo 'Email en_POSTviado com sucesso';
            } else {
                echo 'Email não enviado';
            }*/