<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada em Table</title>
    <style>
        body{
            text-align: center;
        }
        table{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $numero = 8;
        echo "<h1>Tabuada do $numero:</h1>"
    ?>
    
    <table border="1 solid black" align="center">
        <thead>
            <tr>
                <th>Operações:</th>
                <th>Resultados:</th>
            </tr>
        </thead>
        <tbody>
            <?php
                for ($i = 0; $i <= 10; $i++){
                    $resultado = $i * $numero;
                    echo "<tr>";
                    echo "<td>$i * $numero</td>";
                    echo "<td>$resultado</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>