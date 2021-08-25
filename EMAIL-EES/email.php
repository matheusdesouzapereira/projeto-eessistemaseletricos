<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);
$assunto = addslashes($_POST['assunto']);
$mensagem = addslashes($_POST['mensagem']);

$to = "contato@ees-sistemaseletricos.com.br";
$subject = "Contato do site: ".$nome;
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Telefone: ".$telefone. "\r\n".
        "Mensagem: ".$mensagem;
$header = "From:site" . "\r\n".
        "Reply-To:".$email."\e\n".
        "X=Mailer:PHP/".phpversion();
   
if(mail($to,$subject,$body,$header)){
    echo "<script>alert('Email enviado com sucesso!');document.location='http://ees-sistemaseletricos.com.br'; </script>";
}else{
    echo("O Email não pode ser enviado");
}
?>