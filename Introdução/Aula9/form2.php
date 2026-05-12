<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 2</title>
</head>
<body>
    <form method="POST">
        <label>E-mail: </label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail...">
        <br>
        <br>
        <label>Senha: </label>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha...">
        <input type="submit" value="Enviar">
    </form>
    <br>

    <?php
        $email = $_POST["email"];
        echo "E-mail Informado: $email";
        echo "<br>";
        echo "Login Confirmado!";
    ?>
</body>
</html>