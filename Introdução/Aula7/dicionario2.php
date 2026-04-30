<?php
    $funcionarios = [
        ["nome" => "Coraline", "cargo" => "Gatinha"],
        ["nome" => "Eloy", "cargo" => "Gatinho"],
        ["nome" => "Zoe", "cargo" => "Doguinho"]
    ];

    // echo "<strong>Funcionário: </strong>" . $funcionarios[2]["nome"] . "<br>
    // <strong>Cargo:</strong> " . $funcionarios[2]["cargo"] . "<br>";

    foreach ($funcionarios as $f){
        echo $f["nome"] . " - " . $f ["cargo"] . "<br>";
    }
?>