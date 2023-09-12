<?php 
    $user = 'root';
    $pass = '';
    $serv = 'localhost';
    $dbname = 'sis_login';
    $tabela = 'usuarios';

    $conexao = new PDO("mysql:host=$serv;dbname=$dbname", $user, $pass);
?>