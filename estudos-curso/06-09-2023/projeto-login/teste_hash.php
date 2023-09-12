<?php 
    $senha = "cursoemvideo";
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    echo "Para a senha $senha temos o código $hash";

    // eteot2023 = $2y$10$I2j0uR2W6LZGaI.l9R.fJ.N/NH.b4FNK.P8LDzZzE4IzYyidpmYxO
    // cursoemvideo = $2y$10$D/UTIjDJ9zQqa.iER.RA6uCDjX02LzRuFQWf3Mg9GFDgLv4RhKSkS

    $teste = password_verify('cursoemvideo', $hash);

    if ($teste == "true") {
        echo "<p>Senha coincide</p>";
    } else {
        echo "<p>Senha não coincide</p>";
    }
?>