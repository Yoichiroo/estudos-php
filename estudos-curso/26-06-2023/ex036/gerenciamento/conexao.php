<?php 
    $server = 'localhost';
    $user = 'root';
    $senha = '';
    $dbname = 'concessionaria';
    $table = 'veiculos';
    
    $conex = new PDO("mysql:host=$server;dbname=$dbname;", $user, $senha);
?>