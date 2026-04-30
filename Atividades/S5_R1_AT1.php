<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa XYZ</title>
    <style>
        body{
            text-align: center;
        }
        h1{
            color: darkblue;
            padding: 10px;
            border-bottom: 1px solid black;
            font-size: 40px;
        }
        h2{
            font-size: 30px;
        }
    </style>
</head>
<body>
    <h1>Empresa XYZ</h1>
    <?php
        // variaveis
        $empresa = "Empresa XYZ";
        $funcionarios = 80;
        $anoFundacao = 2010;
        $setor = "TI";
        $empresaAtiva = true;
        $anoAtual = 2026;
        $tempoEmpresa = $anoAtual - $anoFundacao;

        echo "<h2>Informações:</h2>";

        // Operador ternario para mostrar se a empresa está ativa
        echo "<h3>Status da Empresa: </h3>" .($empresaAtiva?"Empresa Ativa":"Empresa Desativada");
        
        echo "<h3>Tempo de Mercado:</h3>";

        // Mostra o tempo da empresa no mercado, com auxilio da conta feita anteriormente
        echo "<p>A $empresa está no mercado a $tempoEmpresa anos</p>";

        echo "<h3>Porte da Empresa:</h3>";

        // If para determinar o tamanho da empresa
        if ($funcionarios < 50){ // Menos que 50 funcionarios, pequena
            echo "É uma empresa de Pequeno Porte";
        }
        elseif ($funcionarios < 100){ // Menos de 100, media
            echo "É uma empresa de Médio Porte";
        }
        else{ // de 100 para cima, grande
            echo "É uma empresa de Grande porte";
        }

        echo "<h3>Área de Atuação:</h3>";
        // Encontrando o setor de atuação
         switch($setor){
            case "TI": 
                // Como o setor da empresa é TI, ele ira receber esse echo
                echo "A empresa atua no Setor de Tecnologia";
                break;
            case "RH":
                echo "A empresa atua no Setor de Recursos Humanos";
                break;
            case "Financeiro":
                echo "A empresa atua no Setor Financeiro";
                break;
            default:
                echo "Setor não identificado";
        }

    ?>
</body>
</html>