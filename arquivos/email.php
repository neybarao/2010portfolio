<?php
// valida a requisicao
if($_SERVER['REQUEST_METHOD'] !== "POST"){
	die("Não permitido");	
}

// dados do email
$mailTo = "nrmb85@gmail.com";
$mailTitle = "E-mail do site [neyricardo.com]";

// recebe os dados
$nome = $_POST['nome'];
$mail = $_POST['mail'];
$msg  = $_POST['msg'];

$headers = "From: $nome <$mail>\r\n";
$headers .= "Reply-To: $nome <$mail>\r\n";
$headers .= "Return-Path: $mail\r\n";

// formata a mensagem
$mailBody = "Novo e-mail enviado.\n";
$mailBody .= "------------------------------------------\n";
$mailBody .= "Nome: $nome\n";
$mailBody .= "E-mail: $mail\n";
$mailBody .= "Mensagem: $msg\n";
$mailBody .= "------------------------------------------\n";
$mailBody .= "Enviado em: ".date("H:i d/m/Y");

// envia o email
$sent = mail($mailTo, $mailTitle, $mailBody, $headers);

// valida o envio e mostra o retorno JSON
$retorno = $sent ? "ok" : "erro";
echo "{'result':'$retorno'}";
?>