<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elseif</title>
</head>
<body>
    <?php
        $funcionarios = 120;

        if ($funcionarios < 50){
            echo "Pequeno Porte";
        }
        elseif ($funcionarios < 100){
            echo "Médio Porte";
        }
        else{
            echo "Grande porte";
        }
    ?>
</body>
</html>