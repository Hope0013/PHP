<?php
// Colocamos o cookie aqui pois ele servira para decidir o css da pagina
    $tema_salvo = $_COOKIE['tema_preferido'] ?? 'claro';
    // Aqui ele salva o tema que o usuario escolheu, e se nao tiver, será usado o claro 

    if (isset($_POST['tema'])) {
        $tema_salvo = $_POST['tema'];
        // o tema salvo será o que o usuario escolher no formulario abaixo

        setcookie('tema_preferido', $tema_salvo, time() + (86400 * 30), "/");
        // 86400 segundos são os segundos que temos em um dia
        // fazendo vezes 30, esse cookie irá durar 30 dias

    }

    if ($tema_salvo == 'escuro') {
        $nome_arquivo_css = "temaEscuro.css";
        // se o tema escolhido for escuro, o nome do arquivo css será temEscuro.css
        // esse nome ficará no "href" que direciona para o css
    } else {
        $nome_arquivo_css = "temaClaro.css";
        // mesma coisa para esse
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 10</title>
    <link rel="stylesheet" href="<?php echo $nome_arquivo_css; ?>">
</head>
<body>
    <!-- Coloquei um php aqui para puxar o heade que é uma pagina separada -->
    <?php
        include "header.php";
    ?>
    <div>
        <!-- form para coletar as informações nome, email, cargo e o tema -->
        <form method="POST">
            <strong><label>NOME: </label></strong>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome...">
            <strong><label>E-MAIL: </label></strong>
            <input type="email" name="email" id="email" placeholder="Digite o e-mail...">
            <strong><label>CARGO: </label></strong>
            <input type="text" name="cargo" id="cargo" placeholder="Digite o cargo...">
            <strong><label>PREFERENCIA DE TEMA:</label></strong>
            <select name="tema" id="tema">
                <option value="claro">Modo Claro</option>
                <option value="escuro">Modo Escuro</option>
            </select>
            <input class="button" type="submit" value="ENVIAR">
            <input class="button" type="reset" value="LIMPAR">
        </form>
    </div>
    <?php
        // Iniciamos a sessao
        session_start();

        // funcao para exibir a label e o valor dela
        function exibirCampo($label, $valor){
            echo "<div class='exibir-dados'>
                <span class = 'label-info'>$label</span>
                <span>$valor<span>
                </div>";
        }

        // Se nome, email e cargo estiverem setados, sao armazenados na sessao
        if (isset($_POST["nome"], $_POST["email"], $_POST["cargo"])){
            $_SESSION ["nome"] = $_POST["nome"];
            $_SESSION ["email"] = $_POST["email"];
            $_SESSION ["cargo"] = $_POST["cargo"];
            // e também sao exibidos na tela
            exibirCampo("Nome: ",$_SESSION["nome"]);
            exibirCampo("E-mail: ",$_SESSION["email"]);
            exibirCampo("Cargo: ",$_SESSION["cargo"]);
        }else{
            // enquanto não há nada setado essa mensagem aparece na tela
            echo "<p class = 'msg'>Aguardando Dados...</p>";
        }
    ?>
    <!-- para poder editar de forma isolada eu coloquei o arquivo footer.php em uma tag footer -->
    <footer>
        <?php
        // Aquivo separado incluido no codigo
            include "footer.php";
        ?>
    </footer>
</body>
</html>