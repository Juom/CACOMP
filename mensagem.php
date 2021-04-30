<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];

	$to = "";
	$subject = "Contato Site cacomp";
	$body = "De: ".$nome."<".$email.">"."\r\n".
			"Assunto: ".$assunto.
			
			"\r\n \r\n".$mensagem. "\r\n";
	$header = "From:"."\r\n"
			  ."Reply-To: ".$email."\r\n"
			  ."X=Mailer:PHP/".phpversion();

	if(mail($to, $subject, $body, $header)){
		header('location:index.html#contato');
	}else{
		echo("Email não pode ser enviado");
	}
}
