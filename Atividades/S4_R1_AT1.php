<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparando Empresas</title>
    <style>
       body {
        font-family:Arial, Helvetica, sans-serif;
        line-height: 1.6;
        padding: 50px;
        text-align: center;
    }

    h1 {
        border-bottom: 2px solid #ddd;
        padding-bottom: 10px;
        margin-bottom: 30px;
        color: darkblue;
    }

    p {
        margin: 10px auto;
        padding: 15px;
        max-width: 500px;
        border: 1px solid #eee;
        border-radius: 4px;
    }
    </style>
</head>
<body>
    <h1>Empresa ABC X Empresa XYZ</h1>
    <?php
        // Variaveis da empresa 1
        $empresa1 = "ABC";
        $anoFundacao1 = 2010;
        $funcionarios1 = 30;
        $faturamento1 = 20000.00;
        
        // Variaveis da empresa 2
        $empresa2 = "XYZ";
        $anoFundacao2 = 2005;
        $funcionarios2 = 80;
        $faturamento2 = 50000.00;

        // Calculo aritmetico para definir tempo de cada empresa
        $anoAtual = 2026;
        $tempoEmpresa1 = $anoAtual - $anoFundacao1;
        $tempoEmpresa2 = $anoAtual - $anoFundacao2;

        // Comparação de faturamento e funcionarios
        $maisFuncionarios = $funcionarios1 > $funcionarios2;
        $maiorFaturamento = $faturamento1 > $faturamento2;
        
        echo "<p>A Empresa $empresa1 tem $tempoEmpresa1 anos</p>";
        echo "<p>A Empresa $empresa2 tem $tempoEmpresa2 anos</p>";
        echo "<br>";
        // Operador ternario, funciona como um if/else. Caso seja "true", a resposta é o que vem depois do "?" e caso false, é o que vem depois do ":"
        echo "<p>A Empresa ABC tem: </p>" .($maisFuncionarios?"Mais funcionários que sua concorrente." : "Menos funcionários que sua concorrente.");
        echo "<p>A Empresa ABC fatura: </p>" .($maiorFaturamento?"Mais que sua concorrente." : "Menos que sua concorrente.");


    ?>
</body>
</html>