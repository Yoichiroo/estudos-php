<?php 
    require_once "conexao.php";

    $tipo = $_REQUEST['tipo'] ?? '';
    
    switch($tipo) {
        case 'usu':
            $nome_usu = $_GET['nome_usu'] ?? '';
            $senha = $_GET['senha'] ?? '';
            $ativo = $_GET['ativo'] ?? '';
            $nivel = $_GET['nivel'] ?? '';
            $dt_cadastro = $_GET['dt_cad'] ?? '';
            $senha_decodificada = password_hash($senha, PASSWORD_DEFAULT);
        
            $query = "INSERT INTO usuario VALUES (0,'$nome_usu','$senha_decodificada','$ativo','$nivel','$dt_cadastro') LIMIT 1";
        
            $exec = mysqli_query($conexao, $query);
        
            if ($exec) {
                header("Location:../dashboard.php?msg=1&tipo_msg=insert&page=lista_usu.php");
            } else {
                header("Location:../dashboard.php?msg=2");
            }

            break;

        case 'func':
            $matricula = $_GET['matricula_func'] ?? '';
            $nome_func = $_GET['nome_func'] ?? '';
            $estado_civil = $_GET['estado_civil'] ?? '';
            $dt_nasc = $_GET['dt_nasc'] ?? '';
            $sexo_func = $_GET['sexo_func'] ?? '';
            $nac_func = $_GET['nac_func'] ?? '';
            $nat_func = $_GET['nat_func'] ?? '';
            $nome_pai = $_GET['nome_pai'] ?? '';
            $nome_mae = $_GET['nome_mae'] ?? '';
            $esc_func = $_GET['esc_func'] ?? '';
            $rg_func = $_GET['rg_func'] ?? '';
            $cpf_func = $_GET['cpf_func'] ?? '';
        
            $query = "INSERT INTO funcionario VALUES (0, '$matricula','$nome_func','$estado_civil','$dt_nasc','$sexo_func','$nac_func','$nat_func','$nome_pai','$nome_mae','$esc_func','$rg_func','$cpf_func') LIMIT 1";
        
            $exec = mysqli_query($conexao, $query);
        
            if ($exec) {
                header("Location:../dashboard.php?msg=1&tipo_msg=insert&page=lista_func.php");
            } else {
                header("Location:../dashboard.php?msg=2");
            }
            break;

        case 'prod':
            $nome_prod = $_GET['nome_prod'] ?? '';
            $valor_prod = $_GET['valor_prod'] ?? '';
            $dt_valid_prod = $_GET['dt_valid_prod'] ?? '';

            $query = "INSERT INTO produto VALUES (0, '$nome_prod','$valor_prod','$dt_valid_prod') LIMIT 1";

            $exec = mysqli_query($conexao, $query);

            if ($exec) {
                header("Location:../dashboard.php?msg=1&tipo_msg=insert&page=lista_prod.php");
            } else {
                header("Location:../dashboard.php?msg=2");
            }
            break;

        case 'disc':
            $nome_disc = $_GET['nome_disc'] ?? '';
            $sigla_disc = $_GET['sigla_disc'] ?? '';
            $ch_disc = $_GET['ch_disc'] ?? '';

            $query = "INSERT INTO disciplina VALUES (0, '$nome_disc','$sigla_disc','$ch_disc') LIMIT 1";

            $exec = mysqli_query($conexao, $query);

            if ($exec) {
                header("Location:../dashboard.php?msg=1&tipo_msg=insert&page=lista_disc.php");
            } else {
                header("Location:../dashboard.php?msg=2");
            }
            break;

        case 'alu':
            $nome_aluno = $_GET['nome_aluno'] ?? '';
            $nome_pai = $_GET['nome_pai'] ?? '';
            $nome_mae = $_GET['nome_mae'] ?? '';
            $sexo_aluno = $_GET['sexo_aluno'] ?? '';
            $dt_nasc = $_GET['dt_nasc'] ?? '';
            $rg_aluno = $_GET['rg_aluno'] ?? '';
            $cpf_aluno = $_GET['cpf_aluno'] ?? '';
        
            $query = "INSERT INTO aluno VALUES (0,'$nome_aluno','$nome_pai','$nome_mae','$dt_nasc','$sexo_aluno', '$rg_aluno', '$cpf_aluno') LIMIT 1";
        
            $exec = mysqli_query($conexao, $query);
        
            if ($exec) {
                header("Location:../dashboard.php?msg=1&tipo_msg=insert&page=lista_alu.php");
            } else {
                header("Location:../dashboard.php?msg=2");
            }

            break;
    }
?>