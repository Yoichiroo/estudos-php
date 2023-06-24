<?php 
    $serv = 'localhost';
    $banco = 'agenda';
    $user = 'root';
    $pass = '';
    $conexao = new PDO("mysql:host=$serv; dbname=$banco;", $user, $pass);
?>