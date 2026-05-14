<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $valor = $_POST["valor"] ?? 0;
    $dolar = $_POST["dolar"] ?? 0;
    $result = $valor / $dolar;

    echo "<h2>Resultado de conversão: </h2>";

    echo "<p>Valor em Reais (R$): " . number_format($valor,2,",",".") . "</p>";
    echo "<p>Valor em Dólar (US$): " . number_format($result,2,".",",") . "</p>";

    $padrao_brasil = 
}
?>