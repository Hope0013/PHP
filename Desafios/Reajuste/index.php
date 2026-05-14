<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de Preço</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>REAJUSTE DE PREÇOS</h1>
        <form method="POST">
            <label>DIGITE O PREÇO:</label>
            <!-- pega o numero(aceita ele com 2 casas decimais) -->
            <input type="number" step="0.01" name="preco" id="preco" placeholder="R$ 0,00">
            <label for="range4" class="form-label">PORCENTAGEM DE AJUSTE:</label>
            <!-- range para fazer a barra de arrastar -->
            <input type="range" name="porcentagem" class="form-range" min="0" max="100" value="0" id="porcentagem">
            <output for="porcentagem" id="rangeValue" aria-hidden="true"></output>
            <script>
                // script para mostrar os numeros da barra (de 1 a 100) enquanto o usuario arrasta
                const rangeInput = document.getElementById('porcentagem');
                const rangeOutput = document.getElementById('rangeValue');
                rangeOutput.textContent = rangeInput.value + "%";
                rangeInput.addEventListener('input', function() {
                    rangeOutput.textContent = this.value + "%";
                });
            </script>
            <input class="button" type="submit" value="CALCULAR">
        </form>
    </div>
    <h2>RESULTADOS:</h2>
    <?php
    // Começa se o usuario apertar o botão
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $precoPost = $_POST["preco"] ?? "0";
            $porcentagem = $_POST["porcentagem"] ?? 0;

            // troca a vírgula por ponto para o PHP conseguir calcular
            $precoExclama = str_replace(',', '.', $precoPost);
        
            // transforma em número real (float)
            $preco = (float)$precoExclama;

            // se o valor nao for valido ele da mensagem de erro
            if ($preco <= 0){
                echo "<p class='resultado-texto'><strong>DIGITE UM VALOR VÁLIDO</strong></p>";
            } else {
                // calculo da porcentagem
                $novoPreco = $preco * (1 + $porcentagem / 100);

                // reorganizando para exibir no padrão brasileiro
                $precoFormatado = number_format($preco, 2, ',', '.');
                $novoPrecoFormatado = number_format($novoPreco, 2, ',', '.');

                // imprime o preço original, a porcentagem que foi aumentada e o preço novo
                echo "<div class='resultado-texto'>";
                    echo "O preço original era <strong>R$ $precoFormatado</strong>.<br>";
                    echo "Com reajuste de $porcentagem%, o novo valor é:<br>";
                    // parte do css aqui para o valor novo ficar destacado
                    echo "<span style='font-size: 1.5em; color: #5517ff;'>R$ $novoPrecoFormatado</span>";
                echo "</div>";
        }
    }
    ?>
</body>
</html>