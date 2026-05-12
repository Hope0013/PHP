<?php
    setcookie("Empresa", "cookies", time() + 3600);
    echo "Cookie criado!<br>";

    var_dump($_COOKIE);
?>