<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $valor = (float)$_POST["valor"] ?? 0;
    $dolar = (float)$_POST["dolar"] ?? 0;
    $result = $valor / $dolar;

    echo "<h2>Resultado de conversão: </h2>";

    // echo "<p>Valor em Reais (R$): " . number_format($valor,2,",",".") . "</p>";
    // echo "<p>Valor em Dólar (US$): " . number_format($result,2,".",",") . "</p>";

    $padrao_brasil = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
    $padrao_eua = numfmt_create("en-US", NumberFormatter::CURRENCY);

    echo "<p>Valor em Reais (R$): ". numfmt_format_currency($padrao_brasil, $valor, "BRL") . "</p>";
    echo "<p>Valor em Dolares (R$): ". numfmt_format_currency($padrao_eua, $result, "USD") . "</p>";
}else{
    echo "Favor digitar o valor desejado";
}
?>