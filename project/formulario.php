<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addcslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$telefone = addcslashes($_POST['telefone']);

/*Parte que define para quem o e-mail será enviado, titulo do e-mail 
e os dados que o candidato colocou no formulario*/

$to = ":rh@tinpix.com.br";
$subject = "Teste - Landro Moreira Sales";
$body = "Nome: ".$nome." "\n".
        "Email: ".$email."\n".
        "Telefone: ".$telefone.";

$header = "leandro_moreira08@hotmail.com"."\n"."Reply-To:".$email."\n"."X-Mailer:PHP/".phpversion();

/*Alertas que aparecerão em caso de envio bem sucedido ou em caso de falha*/

if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");
}else{
    echo("Falha no envio!");
}
}
?>