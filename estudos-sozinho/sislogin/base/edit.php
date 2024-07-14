<?php
require_once 'conexao.php';

$tipo = $_REQUEST['tipo'] ?? "";

switch ($tipo) {
    case 'usu':

        $id = $_REQUEST['id'] ?? "";
        $nomeUsu = $_REQUEST['nome_usu'] ?? "";
        $senha = $_REQUEST['senha'] ?? "";
        $nivel = $_REQUEST['nivel'] ?? "";
        $ativo = $_REQUEST['ativo'] ?? "";
        $dt_cad = $_REQUEST['dt_cad'] ?? "";

        $sql = "UPDATE usuario SET nome_usu = '$nomeUsu', senha = '$senha', nivel ='$nivel', ativo = '$ativo', dt_cadastro = '$dt_cad' WHERE id = $id";

        $query = mysqli_query($conexao, $sql);

        if ($query) {
            header("Location:../dashboard.php?msg=1&tipo_msg=edit&page=lista_usu.php");
        } else {
            header("Location:../dashboard.php?msg=2");
        }
        break;

    case 'disc':

        $idDisc = $_REQUEST['id_disc'] ?? "";
        $nome_disc = $_REQUEST['nome_disc'] ?? "";
        $siglaDisc = $_REQUEST['sigla_disc'] ?? "";
        $chDisc = $_REQUEST['ch_disc'] ?? "";

        $sql = "UPDATE disciplina SET nome_disc = '$nome_disc', sigla_disc ='$siglaDisc', ch_disc = '$chDisc' WHERE id_disc = '$idDisc'";

        $query = mysqli_query($conexao, $sql);
        var_dump($sql);

        if ($query) {
            header("Location:../dashboard.php?msg=1&tipo_msg=edit&page=lista_disc.php");
            echo "oi";
        } else {
            header("Location:../dashboard.php?msg=2");
            echo "nao oi";
        }

        break;

    case 'prod':

        $id_prod = $_REQUEST['id_prod'] ?? "";
        $nome_prod = $_REQUEST['nome_prod'] ?? "";
        $valor_prod = $_REQUEST['valor_prod'] ?? "";
        $dt_valid_prod = $_REQUEST['dt_valid_prod'] ?? "";

        $sql = "UPDATE produto SET nome_prod = '$nome_prod', valor_prod ='$valor_prod', dt_valid_prod = '$dt_valid_prod' WHERE id_prod = '$id_prod'";

        $query = mysqli_query($conexao, $sql);

        if ($query) {
            header("Location:../dashboard.php?msg=1&tipo_msg=edit&page=lista_prod.php");
        } else {
            header("Location:../dashboard.php?msg=2");
        }

        break;

    case 'func':
        $id_func = $_REQUEST['id_func'] ?? "";
        $matricula_func = $_REQUEST['matricula_func'] ?? "";
        $nome_func = $_REQUEST['nome_func'] ?? "";
        $estado_civil_func = $_REQUEST['estado_civil_func'] ?? "";
        $dt_nasc_func = $_REQUEST['dt_nasc_func'] ?? "";
        $sexo_func = $_REQUEST['sexo_func'] ?? "";
        $nac_func = $_REQUEST['nac_func'] ?? "";
        $nat_func = $_REQUEST['nat_func'] ?? "";
        $nome_pai = $_REQUEST['nome_pai'] ?? "";
        $nome_mae = $_REQUEST['nome_mae'] ?? "";
        $esc_func = $_REQUEST['esc_func'] ?? "";
        $rg_func = $_REQUEST['rg_func'] ?? "";
        $cpf_func = $_REQUEST['cpf_func'] ?? "";

        $sql = "UPDATE funcionario SET nome_func = '$nome_func', estado_civil_func = '$estado_civil_func', dt_nasc_func = '$dt_nasc_func', sexo_func = '$sexo_func', nac_func = '$nac_func', nat_func = '$nat_func', nome_pai = '$nome_pai', nome_mae = '$nome_mae', esc_func = '$esc_func', rg_func = '$rg_func', cpf_func = '$cpf_func' WHERE id_func = '$id_func'";

        $query = mysqli_query($conexao, $sql);

        if ($query) {
            header("Location:../dashboard.php?msg=1&tipo_msg=edit&page=lista_func.php");
        } else {
            header("Location:../dashboard.php?msg=2");
        }
        break;

    case 'alu':
        $matricula = $_REQUEST['matricula'] ?? "";
        $nome_aluno = $_REQUEST['nome_aluno'] ?? "";
        $nome_pai = $_REQUEST['nome_pai'] ?? "";
        $nome_mae = $_REQUEST['nome_mae'] ?? "";
        $dt_nasc = $_REQUEST['dt_nasc'] ?? "";
        $sexo_aluno = $_REQUEST['sexo_aluno'] ?? "";
        $rg_aluno = $_REQUEST['rg_aluno'] ?? "";
        $cpf_aluno = $_REQUEST['cpf_aluno'] ?? "";

        $sql = "UPDATE aluno SET nome_aluno = '$nome_aluno', dt_nasc = '$dt_nasc', sexo_aluno = '$sexo_aluno', nome_pai = '$nome_pai', nome_mae = '$nome_mae', rg_aluno = '$rg_aluno', cpf_aluno = '$cpf_aluno' WHERE matricula = '$matricula'";

        $query = mysqli_query($conexao, $sql);

        if ($query) {
            header("Location:../dashboard.php?msg=1&tipo_msg=edit&page=lista_alu.php");
        } else {
            header("Location:../dashboard.php?msg=2");
        }
        break;
}
