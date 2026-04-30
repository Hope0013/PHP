<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Funcionários</title>
    <style>
        body{
            background-color: whitesmoke;
        }
        table{
            margin-left: auto;
            margin-right: auto;
            width: 80%;
        }
        
        th, td{
        padding: 5px;
        text-align: center;
        font-size: 20px;
        }
        th{
            background-color: mediumpurple;
        }
        td{
            background-color: white;
        }
    </style>
</head>
<body>
    <?php
    // Dicionario de dados com nome, cago e salario dos funcionarios
        $funcionarios = [
            ["nome" => "Zoe", "cargo" => "Analista", "salario" => 5000.00],
            ["nome" => "Eloy", "cargo" => "Estagiário", "salario" => 4500.00],
            ["nome" => "Olaf", "cargo" => "Programador", "salario" => 6000.00,],
            ["nome" => "Coraline", "cargo" => "Recepcionista", "salario" => 3000.00]
        ];
    ?>
    <!-- tabela com as informações ficarem mais organizadas -->
    <table border="2px solid">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Salário</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Para cada funcionario ele irá imprimir o nome, cargo e salario conforme o index
                foreach ($funcionarios as $f){
                    echo "<tr> <td>" . $f["nome"] . "</td> <td>" . $f["cargo"] . "</td> <td>" . $f["salario"] . "</td> </tr>". "<br>";
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>