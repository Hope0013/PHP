<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
</head>
<body>
    <form method="POST" action="processa.php">
        <label>Digite o valor em Reais a ser convertido(R$):</label>
        <input type="number" step="0.01" name="valor" id="valor" placeholder="Digite aqui...">
        <br>
        <label>Digite o valor do Dólar hoje (US$):</label>
        <input type="number" step="0.01" name="dolar" id="dolar" placeholder="Digite aqui...">
        <br>
        <input type="submit" value="Converter">
    </form>
</body>
</html>