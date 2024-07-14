<?php
require_once 'base/conexao.php';

$tipo = $_REQUEST['tipo'] ?? "";

switch ($tipo) {
    case 'usu':
        $id = $_REQUEST['id'] ?? "";

        $sql = "DELETE FROM usuario WHERE id = $id";

        $query = mysqli_query($conexao, $sql);

        if ($query) {
            header("Location:../dashboard.php?msg=1&tipo_msg=remove&page=lista_usu.php");
        } else {
            header("Location:../dashboard.php?msg=2");
        }
        break;

    case 'disc':
        $id_disc = $_REQUEST['id'] ?? "";

        $sql = "DELETE FROM disciplina WHERE id_disc = $id_disc";

        $query = mysqli_query($conexao, $sql);

        if ($query) {
            header("Location:../dashboard.php?msg=1&tipo_msg=remove&page=lista_disc.php");
        } else {
            header("Location:../dashboard.php?msg=2");
        }
        break;
    case 'prod':
        $id_prod = $_REQUEST['id'] ?? "";

        $sql = "DELETE FROM produto WHERE id_prod = $id_prod";

        $query = mysqli_query($conexao, $sql);

        if ($query) {
            header("Location:../dashboard.php?msg=1&tipo_msg=remove&page=lista_prod.php");
        } else {
            header("Location:../dashboard.php?msg=2");
        }
        break;
    case 'func':
        
        $id_func = $_REQUEST['id'] ?? "";

        $sql = "DELETE FROM funcionario WHERE id_func = $id_func";

        $query = mysqli_query($conexao, $sql);

        if ($query) {
            header("Location:../dashboard.php?msg=1&tipo_msg=remove&page=lista_func.php");
        } else {
            header("Location:../dashboard.php?msg=2");
        }
        break;

    case 'alu':
    
        $matricula = $_REQUEST['matricula'] ?? "";

        $sql = "DELETE FROM aluno WHERE matricula = $matricula";

        $query = mysqli_query($conexao, $sql);

        if ($query) {
            header("Location:../dashboard.php?msg=1&tipo_msg=remove&page=lista_alu.php");
        } else {
            header("Location:../dashboard.php?msg=2");
        }
        break;
}
