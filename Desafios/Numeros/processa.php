<link rel="stylesheet" href="style2.css">

<h1>. ₊ ⊹ . ₊˖ . ₊DESCOBRINDO OS NÚMEROS. ₊ ⊹ . ₊˖ . ₊</h1>
<div>
<?php

    if (isset($_POST["num"])){

        $numero = $_POST["num"];

        if ($numero == ""){
            echo "<p>Nenhum número foi digitado. Volte e digite um número.</p>";
        } else{
            function exibirCampo($label, $valor){
                echo "$label $valor";
            }
            exibirCampo("<h2>Número Digitado: ", $_POST["num"] . "</h2>");
            echo "<h2>Número Anterior: " . ($numero - 1) . "</h2>";
            echo "<h2>Número Posterior: " . ($numero + 1) . "</h2>";
        }
    }
?>
</div>
<form action="index.php">
    <button class= "button" type="submit" >VOLTAR</button>
</form>
