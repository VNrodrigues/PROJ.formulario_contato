<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem =addslashes($_POST['message']);

$to = "vinicius712rodrigues@gmail.com";
$subject = "FORMULÁRIO - Contato";
$body = "Nome:".$nome. "\r\n".
        "Email:".$email. "\r\n".
        "Mensagem:".$mensagem;
$header = "From: vinirodrigues712@gmail.com"."\r\n".
            "Reply to:".$email."\r\n".
            "X-Mailer:PHP/".phpversion();

if(mail($to, $subject, $body, $header)){

    echo("Email enviado com sucesso");

}else{
    echo("O email não pode ser enviado");
}

}

?>