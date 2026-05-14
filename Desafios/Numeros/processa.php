<link rel="stylesheet" href="style2.css">

<h1>. ₊ ⊹ . ₊˖ . ₊DESCOBRINDO OS NÚMEROS. ₊ ⊹ . ₊˖ . ₊</h1>
<div>
<?php
    // confere se o numero esta setado para ele aparecer
    if (isset($_POST["num"])){

        // coloquei o numero em uma variavel para ser mais facil de usa-lo durante o codigo
        $numero = $_POST["num"];

        // se o usuario nao digitar a mensagem sera exibida
        if ($numero == ""){
            echo "<p>Nenhum número foi digitado. Volte e digite um número.</p>";
        } else{
            // se ele digitar a funcao exibir campo é curl_multi_add_handle
            
            function exibirCampo($label, $valor){
                echo "$label $valor";
            }
            // e as informações sao exibidas na tela
            exibirCampo("<h2>Número Digitado: ", $_POST["num"] . "</h2>");
            // contas basicas de + e - para descobrir o numero anterior e posterio
            echo "<h2>Número Anterior: " . ($numero - 1) . "</h2>";
            echo "<h2>Número Posterior: " . ($numero + 1) . "</h2>";
        }
    }
?>
</div>
<!-- botão para voltar a pagina index -->
<form action="index.php">
    <button class= "button" type="submit" >VOLTAR</button>
</form>
