<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
</head>
<body>
    <?php
    if ($_SERVER)
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/
        CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinal
        Cotacao)?dataInicial=\''.$inicio . '\'&@dataFinalcotacao=\''.$fim . '\'
        &$top=100&$format=json&select=cotacaoCompra';

        $dados = json_decode(file_get_contents($url), true);

        $dolar = $dados['value'][0]['cotacaoCompra'];
        $result = $valor/$dolar;

        echo "<h2>Resultado da Conversão</h2>";

        $padrao_brasil = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        $padrao_eua = numfmt_create("en-US", NumberFormatter::CURRENCY);

        echo "<p>Valor em Reais (R$): ". numfmt_format_currency($padrao_brasil, $valor, "BRL") . "</p>";
        echo "<p>Valor em Dolares (USS$): ". numfmt_format_currency($padrao_eua, $result, "USD") . "</p>";
        echo "Cotação do Dólar: $dados"; 
    }

    ?>
</body>
</html>