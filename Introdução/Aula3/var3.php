<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas</title>
    <style>
        body{
            text-align: center;
            background-color: lightgrey;
        }
        h1{
            color: darkblue;
            font-size: 40px;
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

        echo "<h1>Empresa $empresa</h1>";
        echo "<p>Ano de Fundação: $ano</p>";
        echo "<p>Quantidade de Funcionários: $funcionarios</p>";
    ?>
</body>
</html>