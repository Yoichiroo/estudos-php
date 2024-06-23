<?php
    $n1 = (int)$_GET['n1'] ?? 0;
    $n2 = (int)$_GET['n2'] ?? 0;
    
    if($n1 && $n2) {
        $soma = $n1 + $n2;
        if($soma > 20) {
            $novoNumero = $soma + 8;
            echo $novoNumero;
        } else {
            $novoNumero = $soma - 5;
            echo $novoNumero;
        }
    } else {
        echo "<p>Digite os dois números para serem calculados.</p>";
    }
?>