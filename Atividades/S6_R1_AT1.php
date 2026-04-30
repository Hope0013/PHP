<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For e While</title>
    <style>
        body{
            text-align: center;
            background-color:lightsteelblue;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <?php
        // O for percorre o "i" até 10
        for ($i = 1; $i <= 10; $i++){
            // Imprime cada numéro na frente de "Funcionario"
            echo "Funcionário $i" . "<br>";
            
            // Quando "i" for 10, o for para e a mensagem é exibida na tela
            if ($i == 10){
                echo "<br>" . "Todos os funcionários listados!";
            }

            // O if tem que ficar edntro do for, pois se ficar fora, o "i" estaria em 11 e o if não funcionaria
        }
    ?>
</body>
</html>