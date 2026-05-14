<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>SORTEIO DA MEGA-SENA</h1>
    <?php
    // fazendo uma funçaõ para sortear os numeros
        function sortear($min, $max, $qtd){

        // os numeros vao ser sorteados entre o minimo e o maximo
            $numeros = range($min, $max);
            // o shuffle é responsavel por pegar os numeros sorteados e 
            // embaralha-los para serem armazenados no array
            shuffle($numeros);

            // o array_lince guarda os numeros sorteados
            return array_slice($numeros, 0, $qtd);
        }

        // se o botao for acionado
        if (isset($_GET['btn-sortear'])){
            // a variavel resultado vai guardar os 6 numeros sorteados de 1 a 60 
            $resultado = sortear(1,60, 6);

            // coloca cada numero num span para podermos fazer um css mais bonitinho
            // cada numero vai estar numa caixinha
            echo "<div class='container-numeros'>";
                foreach($resultado as $num){
                    echo "<span class = 'caixinha'>$num</span>";
                }
            echo "</div>";
        }
    ?>
    <!-- botao que vai executar a funcao sortear -->
    <form method="GET">
        <button class="button" type="submit" name="btn-sortear">SORTEAR</button>
    </form>
</body>
</html>