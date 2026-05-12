<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        /* definindo cor, fonte, centralizando no meio e em colunas */
        body{
            background: linear-gradient(to top, #d7ddff, #87b9fa );
            background-attachment: fixed;
            margin: 0;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            display: flex;
            flex-direction: column; 
            align-items: center; 
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        /* arrumando a div onde esta o form */
        div{
            padding: 10px;
            width: 300px;
            background-color: rgba(102, 163, 255, 0.66);
            border-radius: 30px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.30);
        }
        /* posicionando as informações em colunas e dando espaço */
        form{
            display: flex;
            flex-direction: column;
            margin: 15px;
        }
        label {
            margin-top: 10px;
            font-size: 15px;
        }
        
        input {
            margin: 10px 0;
            padding: 5px;
            border: 0px;
            border-radius: 5px;
            font-family:Verdana, Geneva, Tahoma, sans-serif
        }

        .button{
            background-color: #0160dbde;
            font-weight: bold;
            border-radius: 10px;
            border: 0px;
            margin-top: 10px;
            font-family: Verdana, Geneva, Tahoma, sans-serif
        }

        .button:hover{
            background-color: #0047a5;
        }
        
        h2{
            font-size: 25px;
        }

        .exibir-dados{
            margin: 10px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.30);

        }
        .label-info{
            font-weight: bold;
            text-transform: uppercase;
            font-size: 0.8em;
        }
    </style>
</head>
<body>
    <h1>REGISTRE UM PRODUTO</h1>
    <!-- Formulario em html -->
    <div>
        <form method="POST">
            <strong><label>PRODUTO: </label></strong>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome do produto...">
            <strong><label>PREÇO: </label></strong>
            <input type="floatval" name="preco" id="preco" placeholder="Digite o preço...">
            <strong><label>QUANTIDADE: </label></strong>
            <input type="number" name="qtd" id="qtd" placeholder="Digite a quantidade...">
            <strong><label>DESCRIÇÃO: </label></strong>
            <input type="text" name="descricao" id="descricao" placeholder="Descrição do objeto...">
            <input class="button" type="submit" value="ENVIAR">
            <input class="button" type="reset" value="LIMPAR">
        </form>
    </div>
    <br>
    <hr>
    <h2>DADOS REGISTRADOS</h2>
    <?php
        // A função "exibirCampo" é usada para mostrar o label e seu valor em seguida
        function exibirCampo($label, $valor){
            echo    "<div class='exibir-dados'>
                    <span class = 'label-info'>$label</span>
                    <span>$valor<span>
                    </div>";
        }

        // O if está sendo usado para conferir se estão setadas as informações.
        // Se elas estiverem, apareceram na tela e não seram exibidas mensagens de erro
        if (isset($_POST["nome"], $_POST["preco"], $_POST["qtd"], $_POST["descricao"])){
            exibirCampo("Produto: ", $_POST["nome"]);
            exibirCampo("Preço: ", $_POST["preco"]);
            exibirCampo("Quantidade: ", $_POST["qtd"]);
            exibirCampo("Descrição: ", $_POST["descricao"]);
        }else{
            echo "Aguardando dados...";
        }
    ?>
</body>
</html>