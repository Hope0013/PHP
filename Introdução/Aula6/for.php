<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        main{
            border: 1px solid grey;
            margin: 10px;
            padding: 10px;
            text-align: center;
        }
        section{
            text-align: center;
            border: 1px solid grey;
            margin: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <main>
        <?php
            for ($i = 1; $i <= 5; $i++){
                echo "Ano $i da empresa <br>";
            }
        ?>
    </main>

    <section>
        <?php
            $anos = 10;
            for ($i = 1; $i <=$anos; $i++){
                echo "Ano $i de operação, ";
            }
        ?>
    </section>
</body>
</html>
