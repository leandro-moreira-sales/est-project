<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addcslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$telefone = addcslashes($_POST['telefone']);

$to = ":rh@tinpix.com.br";
$subject = "Teste - Landro Moreira Sales";
$body = "Nome: ".$nome." "\n".
        "Email: ".$email."\n".
        "Telefone: ".$telefone.";

$header = "leandro_moreira08@hotmail.com"."\n"."Reply-To:".$email."\n"."X-Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");
}else{
    echo("Falha no envio!");
}
}
?>