<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <style>
        body{
            text-align: center;
            font-size: 30px;
        }
    </style>
</head>
<body>
    <?php
        $numero = 5;
        echo "Tabuada do $numero: <br>";
        echo "<br>";
        for ($i = 1; $i <= 10; $i++){
            $resultado = $i * $numero;

            echo "$i X $numero = $resultado <br>";
        }
    ?>
</body>
</html>