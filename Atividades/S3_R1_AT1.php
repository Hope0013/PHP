<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa XYZ</title>
    <style>
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
        $empresa = "XYZ";
        $ano = 2010;
        $funcionarios = 40;
        $premios = 200;
        $empresaAtiva = true;


        echo "<h1>Empresa $empresa</h1>";
        echo "<p>Ano de Fundação: $ano</p>";
        echo "<p>Quantidade de Funcionários: $funcionarios</p>";
        echo "<p>Ganhadora de $premios prêmios</p>";
        echo "<p>A Empresa está: </p>" . ($empresaAtiva?"Ativa" : "Desativada");
    ?>
</body>
</html>