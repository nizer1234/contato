<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contato</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <nav>
        <input type="checkbox" id="checkbox" class="checkbox">
        <label for="checkbox" class="label-menu">Menu <span class="hamburguer"></span></label>
        <ul class="menu">
            <li><a href="index.html" onclick="window.location.reload()">Início</a></li>
            <li><a href="#servicos" onclick="hideMenu()">Serviços</a></li>
            <li><a href="#cases" onclick="hideMenu()">Cases</a></li>
            <li><a href="#empresa" onclick="hideMenu()">Empresa</a></li>
            <li><a href="contato.php" onclick="hideMenu()">Contato</a></li>
        </ul>
    </nav><br><br><br><br><br><br><br><br><br>
    <h2><center>Preencha o formulário para contatos:</center></h2>
    <form class="formulario" action="processaform.php" method="POST">
        <input type="text" name="camponome" placeholder="digite seu nome" class="campo">
        <input type="email" name="campoemail" placeholder="digite seu email" class="campo">
        <input type="text" name="campotelefone" placeholder="digite seu telefone" class="campo">
        <input type="text" name="assunto" placeholder="digite o assunto" class="campo">
        <textarea type="text" name="mensagem" rous="10" placeholder="Sua mensagem" class="campo"></textarea>
        <input type="submit" value="Enviar" class="botao">
    </form>
</body>
</html>