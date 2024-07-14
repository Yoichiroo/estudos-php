<?php 
    $page = $_REQUEST['page'] ?? '';

    switch($page) {
        case 'lista_usu.php':
            require_once "lista_usu.php";
            break;

        case 'lista_disc.php':
            require_once "lista_disc.php";
            break;

        case 'lista_prod.php':
            require_once "lista_prod.php";
            break;

        case 'lista_func.php':
            require_once "lista_func.php";
            break;

        case 'lista_alu.php':
            require_once "lista_alu.php";
            break;

        case 'add_prod.php':
            require_once "fadd_prod.php";
            break;

        case 'add_disc.php':
            require_once "fadd_disc.php";
            break;

        case 'add_func.php':
            require_once "fadd_func.php";
            break;

        case 'add_alu.php':
            require_once "fadd_alu.php";
            break;

        case 'add_usu.php':
            require_once "fadd_usu.php";
            break;

        case 'remove.php':
            require_once "remove.php";
            break;

        case 'fedit_usu.php':
            require_once "fedit_usu.php";
            break;

        case 'fedit_prod.php':
            require_once "fedit_prod.php";
            break;

        case 'fedit_disc.php':
            require_once "fedit_disc.php";
            break;
            
        case 'fedit_func.php':
            require_once "fedit_func.php";
            break;

        case 'fedit_alu.php':
            require_once "fedit_alu.php";
            break;

        default:
            require_once "lista_usu.php";
            break;
    }

?>