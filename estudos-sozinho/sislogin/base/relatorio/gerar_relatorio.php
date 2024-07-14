<?php
// Exibir erros
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';
require_once '../conexao.php';

$tipo = isset($_GET['tipo']) ? $_GET['tipo'] : 'usuario';

switch ($tipo) {
    case 'prod':
        $sql = "SELECT * FROM produto";
        $titulo = 'Produtos';
        break;
    case 'func':
        $sql = "SELECT * FROM funcionario";
        $titulo = 'Funcionários';
        break;
    case 'disc':
        $sql = "SELECT * FROM disciplina";
        $titulo = 'Disciplinas';
        break;
    case 'alu':
        $sql = "SELECT * FROM aluno";
        $titulo = 'Alunos';
        break;
    case 'usu':
    default:
        $sql = "SELECT * FROM usuario";
        $titulo = 'Usuários';
        break;
}

$result = mysqli_query($conexao, $sql);

if (!$result) {
    die("Erro na consulta ao banco de dados: " . mysqli_error($conexao));
}

// Estilo CSS para a tabela (pode ser ajustado conforme necessário)
$css = '
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 20px;
        }
        .container {
            width: 80%;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #0000;
            color: #fff;
            font-weight: bold;
        }

        tr:nth-child(odd) {
            background-color: #f2f2f2;
        }   
    </style>
';

$html = '
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relatório de ' . $titulo . '</title>
        ' . $css . '
    </head>
    <body>
        <div class="container">
            <h1>Relatório de ' . $titulo . '</h1>
            <hr>
            <table class="table table-striped">
                <thead>
                    <tr>';

switch ($tipo) {
    case 'prod':
        $html .= '<th>ID</th><th>Nome</th><th>Preço</th><th>Data de Validade</th>';
        break;
    case 'func':
        $html .= '<th>ID</th><th>Matrícula</th><th>Nome</th><th>Estado Civil</th><th>Data de Nascimento</th><th>Sexo</th><th>Nacionalidade</th><th>Naturalidade</th><th>Nome do Pai</th><th>Nome da Mãe</th><th>Escolaridade</th><th>RG</th><th>CPF</th>';
        break;
    case 'disc':
        $html .= '<th>ID</th><th>Nome</th><th>Sigla</th><th>Carga Horária</th>';
        break;
    case 'alu':
        $html .= '<th>Matrícula</th><th>Nome</th><th>Nome do Pai</th><th>Nome da Mãe</th><th>Sexo do Aluno</th><th>RG do Aluno</th><th>CPF do Aluno</th>';
        break;
    case 'usu':
    default:
        $html .= '<th>ID</th><th>Nome</th><th>Senha</th><th>Nível</th><th>Ativo</th><th>Data de Inserção</th>';
        break;
}

$html .= '
                </tr>
            </thead>
            <tbody>';

while ($dados = mysqli_fetch_assoc($result)) {
    $html .= '<tr>';
    switch ($tipo) {
        case 'prod':
            $html .= '<td>' . $dados['id_prod'] . '</td><td>' . $dados['nome_prod'] . '</td><td>R$ ' . number_format($dados['valor_prod'], 2, ",", ".") . '</td><td>' . $dados['dt_valid_prod'] . '</td>';
            break;
        case 'func':
            $html .= '<td>' . $dados['id_func'] . '</td><td>' . $dados['matricula_func'] . '</td><td>' . $dados['nome_func'] . '</td><td>' . $dados['estado_civil_func'] . '</td><td>' . $dados['dt_nasc_func'] . '</td><td>' . $dados['sexo_func'] . '</td><td>' . $dados['nac_func'] . '</td><td>' . $dados['nat_func'] . '</td><td>' . $dados['nome_pai'] . '</td><td>' . $dados['nome_mae'] . '</td><td>' . $dados['esc_func'] . '</td><td>' . $dados['rg_func'] . '</td><td>' . $dados['cpf_func'] . '</td>';
            break;
        case 'disc':
            $html .= '<td>' . $dados['id_disc'] . '</td><td>' . $dados['nome_disc'] . '</td><td>' . $dados['sigla_disc'] . '</td><td>' . $dados['ch_disc'] . '</td>';
            break;
        case 'alu':
            $html .= '<td>' . $dados['matricula'] . '</td><td>' . $dados['nome_aluno'] . '</td><td>' . $dados['nome_pai'] . '</td><td>' . $dados['nome_mae'] . '</td><td>' . $dados['sexo_aluno'] . '</td><td>' .$dados['rg_aluno'] . '</td><td>' . $dados['cpf_aluno'] . '</td>';
            break;
        case 'usu':
        default:
            $html .= '<td>' . $dados['id'] . '</td><td>' . $dados['nome_usu'] . '</td><td>' . $dados['senha'] . '</td><td>' . $dados['nivel'] . '</td><td>' . $dados['ativo'] . '</td><td>' . $dados['dt_cadastro'] . '</td>';
            break;
    }
    $html .= '</tr>';
}

$html .= '
            </tbody>
        </table>
    </div>
</body>
</html>
';
$htmlfooter = "
		<hr>
		<div class='rodape'>Emissão: ".date('d/m/Y - H:i:s')." </div>
	</fieldset>
	"; 

$mpdf = new \Mpdf\Mpdf();
$nomeArquivo = 'relatorio_' . $tipo . '.pdf';
$mpdf->WriteHTML($html);
$mpdf->SetHTMLFooter($htmlfooter);
$mpdf->Output($nomeArquivo, \Mpdf\Output\Destination::INLINE);
?>
