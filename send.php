<?php
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
$mail = new PHPMailer(true);
 
try {
    
	//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
    $mail->CharSet = "utf-8";// set charset to utf8
    $mail->SMTPAuth = true;// Enable SMTP authentication
    $mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted
    
    $mail->Username = 'alberto.neto@edu.unifor.br';
	$mail->Password = '15069400';
	$mail->Port = 587;
    
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

	$mail->setFrom('alberto.neto@edu.unifor.br', 'Alberto Vitoriano');
	$mail->addAddress($_POST["email"]);
	$mail->AddBCC('alberto.neto94@gmail.com');
    
	$mail->isHTML(true);
	$mail->Subject = 'Escolha da data do Presente!';
	$mail->Body = 'Olá, você acessou o site e escolheu o recebimento do presente para o dia <strong>' . $_POST["dia"] . '</strong>. Em breve chegara na sua casa!';
	$mail->AltBody = 'Parabéns pela a escolha do Presente!';
    
	if($mail->send()) {
		echo 'Email enviado com sucesso';
	} else {
		echo 'Email nao enviado';
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}