<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Funcionários</title>
    <style>
        th, td{
            padding: 15px;
            text-align: center;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <?php
        $funcionarios = [
            ["nome" => "Coraline", "cargo" => "Gatinha", "salario" => "Sachê"],
            ["nome" => "Eloy", "cargo" => "Gatinho", "salario" => "Ração"],
            ["nome" => "Zoe", "cargo" => "Doguinho", "salario" => "Bolinha"],
            ["nome" => "Olaf", "cargo" => "Gatinho", "salario" => "Caixa de papelão"]
        ];
    ?>
    <table border="1 solid black" align="center">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Salário</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($funcionarios as $f){
                    echo "<tr> <td>" . $f["nome"] . "</td> <td>" . $f ["cargo"] . "</td> <td>" . $f["salario"] . "</td> </tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
