<?php
    $banco = "concessionaria";
    $tabela = "veiculos";
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";

    $conex = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

?>