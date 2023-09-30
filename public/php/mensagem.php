<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    $destinatario = "ricardo_santins@live.com";
    $assunto = "Mensagem de Contato de $nome";

    $corpo_email = "Nome: $nome\n";
    $corpo_email .= "Email: $email\n";
    $corpo_email .= "Mensagem:\n$mensagem";

    $headers = "From: $email";

    if (mail($destinatario, $assunto, $corpo_email, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem.";
        echo "Nome: $nome\n";
        echo "Email: $email\n";
        echo "Mensagem: $mensagem\n";
        echo "Corpo email: $corpo_email\n";
        echo $destinatario, $assunto, $corpo_email, $headers;
        
    }
}
?>
