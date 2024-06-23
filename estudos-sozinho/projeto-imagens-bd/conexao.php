<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'upload';

    $mysqli = new mysqli($host, $user, $pass, $dbname);

    if($mysqli -> connect_errno) {
        echo "Connect failed: " . $mysqli->connect_error;
        exit(); 
    }

?>