<?php 
    $dbname = 'agenda';
    $pass = '';
    $user = 'root';
    $server = 'localhost';

    $tabela = 'contatos';

    $conexao = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
?>