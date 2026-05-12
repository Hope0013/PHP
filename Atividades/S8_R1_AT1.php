<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função</title>
    <style>
        body{
            background-color: whitesmoke;
            text-align: center;
            font-size: 18px;
        }
        h1{
            font-size: 35px;
        }

    </style>
</head>
<body>
    <h1>Venda de Produtos</h1>
    <?php
        // Função para exibir informações do produto
        function exibirProduto($nome, $preco){
            echo "Produto: $nome | Preço: R$$preco";
        }


        // Função para calcular preço total conforme a quantidade desejada
        function calcularTotal($preco, $quantidade) {
            $total = $preco * $quantidade;
            return $total; // Devolve o valor calculado para ser usado fora da função
        }

        // Informações do primeiro item
        $p1_nome = "Mouse";
        $p1_preco = 150;
        $p1_qtd = 2;

        // Usando a função para exibir as informações
        exibirProduto($p1_nome, $p1_preco);

        echo "<br>";
        
        // Calculando o preço total para a compra de 2 mouses

        // TotalVenda1 usa a função "calcularTotal" com os parametros do primeiro item (p1_preco, p1_qtd)
        $totalVenda1 = calcularTotal($p1_preco, $p1_qtd);
        // Usando o parametro de quantidade para mostrar quantas estão sendo compradas
        echo "Total da compra ($p1_qtd unidades): R$ $totalVenda1 <br>";

        echo "<br>";

        // Informações do segundo item
        $p2_nome = "Teclado";
        $p2_preco = 200;
        $p2_qtd = 3;

        // Exibe informações com a função exibirProduto
        exibirProduto($p2_nome, $p2_preco);
        
        echo "<br>";

        // Calculando o preço total para a compra de 3 teclados
        $totalVenda2 = calcularTotal($p2_preco, $p2_qtd);
        echo "Total da compra ($p2_qtd unidade): R$ $totalVenda2";
    
    ?>
</body>
</html>