<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa XYZ</title>
    <style>
        /* Estilizando a pagina */
        body{
            text-align: center;
            background-color: lightgray;
        }
        h1{
            font-size: 40px;
            color: darkblue;
        }
        p{
            font-size: 20px;
        }
    </style>
</head>
<body>
    <?php
        // Definindo variaveis
        $empresa = "XYZ";
        $ano = 2010;
        $funcionarios = 40;
        $premios = 200;
        $empresaAtiva = true;

        // Imprimindo na tela
        echo "<h1>Empresa $empresa</h1>";
        echo "<p>Ano de Fundação: $ano</p>";
        echo "<p>Quantidade de Funcionários: $funcionarios</p>";
        echo "<p>Ganhadora de $premios prêmios</p>";
        // No final temos um operador ternario, se a resposta for "true", responde ativa, se não "desativada"
        echo "<p>A Empresa está: </p>" . ($empresaAtiva?"Ativa" : "Desativada");
    ?>
</body>
</html>