<?php 
    if(session_status() === PHP_SESSION_NONE) {
        session_start();
        $_SESSION['logado'] = false;
        $_SESSION['usuario'] = '';
    }
    if(session_status() === PHP_SESSION_DISABLED) {
        session_destroy();
        session_start();
        $_SESSION['logado'] = false;
        $_SESSION['usuario'] = '';
    }
    if (!isset($_SESSION['logado']) || $_SESSION['logado'] == false) {
        header("location:login.php");
        exit;
    }

?>