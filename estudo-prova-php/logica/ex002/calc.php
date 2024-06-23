<?php 
    $n1 = $_GET['n1'] ?? 0;
    if($n1 % 10 == 0 && $n1 % 5 == 0 && $n1 % 2 == 0) {
        echo "<p>Este número é divisível por 10, por 5 e por 2.</p>";
    } elseif ($n1 % 10 == 1 && $n1 % 5 == 1 && $n1 % 2 == 1){
        echo "<p>Este número não é divisível por 10, por 5 e por 2.</p>";
    } else {
        echo "<p>Este número é divisível por 10, por 5 ou por 2.</p>";
    }
?>