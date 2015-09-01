<?php
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Argumentos Inválidos";
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	

$to = 'contato@kaiowadobrasil.com.br';
$email_subject = "$name";
$email_body = "Você recebeu uma mensagem do formulário de contato em seu website.\n\n"."Aqui estão os detalhes:\n\nNome: $name\n\nTelefone: $phone\n\nEmail: $email_address\n\nMensagem:\n$message";
$headers = "From: noreply@kaiowadobrasil.com.br\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>