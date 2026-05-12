<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 3</title>
</head>
<body>
    <form method="POST">
        <label>Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome...">
        <br>
        <br>
        <label>E-mail: </label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail...">
        <br>
        <br>
        <label>Mensagem: </label>
        <input type="text" name="msg" id="msg" placeholder="Digite uma mensagem...">
        <input type="reset" value="Limpar">
        <input type="submit" value="Enviar">
    </form>
    <br>
    <hr>
    <h2>Dados Recebidos:</h2>
    <?php
        // Declarando as variaveis
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $msg = $_POST["msg"];

        // Exibindo informações
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "Mensagem: $msg <br>";
    ?>
</body>
</html>