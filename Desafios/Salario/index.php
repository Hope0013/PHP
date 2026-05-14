<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sálario Mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <!-- formulario para o usuario colocar o valor -->
        <form method="POST">
            <strong><label>DIGITE O SALÁRIO: </label></strong>
            <input type="floatval" name="salario" id="salario" placeholder="R$ 0000.00">
            <input class="button" type="submit" value="Verificar">
        </form>
        <h1>Salário mínimo hoje em dia... R$1.621,00</h1>
    </div>

    <?php
    // garante que o php so rode se o botao for acionado
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        // confere se o salario nao é igual a "vazio"
        $salario = $_POST["salario"] ?? "";
        // define salario minimo
        $salarioMin = 1621.00;

        // se salario for vazio ele exibe uma mensagem pedindo um valor
        if ($salario == "" || !is_numeric($salario)){
            echo "<strong>DIGITE UM VALOR</strong>";
        } else{

            // se o valor for valido, calcula-se quantos salarios minimos ele vale
            $qtdSalarios = round($salario / $salarioMin);
            // e calcula-se quanto sobra
            $resto = $salario - $salarioMin;

            echo "<div>";
                echo "<h3>RESULTADOS:</h3>";
                // imprime o salario
                echo "<p class= 'resultado-texto'>O Salário: " . $salario . "</p>";
                // imprime quantos salarios minimos ele equivale
                echo "<p class= 'resultado-texto'>Esse salário equivale a aproximadamente " . $qtdSalarios . " salário(os) mínimo(os)</p>";
                // confere o resto. se ele for menor ou igual a zero nao aparece numero negativo ou 0, ele diz que nao sobrou
                if ($resto <= 0){
                    echo "<p class= 'resultado-texto'>E não sobra nada</p>";
                } else{
                    // ou se sobrar ele exibe o resultado da conta
                    echo "<p class= 'resultado-texto'>E sobram R$ $resto</p>";
                }
            echo "</div>";
        }
    }

    ?>
</body>
</html>