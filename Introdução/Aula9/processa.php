<?php
        function exibirCampo($label, $valor){
            echo "$label $valor <br>";
        }

        // 1° FORMA DE FAZER
        if (isset($_POST["nome"], $_POST["email"])){
            exibirCampo("Nome: ", $_POST["nome"]);
            exibirCampo("E-mail: ", $_POST["email"]);
        }

        // 2° FORMA DE FAZER
        // exibirCampo("Nome: ", $_POST["nome"] ?? " ");
        // exibirCampo("Email: ", $_POST["email"] ?? " ");
?>