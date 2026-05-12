<?php
    function calcularTempoEmpresa($anoFundacao, $anoAtual){
        $tempo = $anoAtual - $anoFundacao;
        echo "Tempo da Empresa: $tempo anos";
    }

    calcularTempoEmpresa(2013, 2026)
?>