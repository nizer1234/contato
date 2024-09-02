<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $nome = $_POST['camponome'];
        $email = $_POST['campoemail'];
        $telefone = $_POST['campotelefone'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];

        $destinario="matheusnizerny@gmail.com";
        $fonte="Mensagem de contatos";
        $corpo = "Nome do contato: $nome \n";
        $corpo = "E-mail do contato: $email \n";
        $corpo = "Telefone do contato: $telefone \n";
        $corpo = "Assunto: $assunto \n";
        $corpo = "Mensagem: $mensagem \n";

        mail($destinario,$assunto,$corpo);

        header("Location:obrigado.html");
        exit();


    }
?>