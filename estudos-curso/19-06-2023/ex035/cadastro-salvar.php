<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar cadastro</title>
</head>
<body>
    <?php 
        require_once 'gerenciamento/abrir-banco.php';

        $nome = $_REQUEST['nome'] ?? '';
        $tel = $_REQUEST['telefone'] ?? '';
        $bairro = $_REQUEST['bairro'] ?? '';
    ?>
    <main>
        <?php 
            if(empty($nome) || empty($tel) || empty($bairro)) {
                echo "Preencha todos os dados necessários e tente novamente.";
            } else {
                $dados = [
                    'nome' => $nome,
                    'tel' => $tel, 
                    'bairro' => $bairro
                ];
                $sql = "INSERT INTO contato (`nome`, `telefone`, `bairro`) VALUES (:nome, :tel, :bairro)";
                $comando = $conexao -> prepare($sql);
                try {
                    $conexao -> beginTransaction();
                    $comando -> execute($dados);
                    $conexao -> commit();
                    echo "O cadastro de $nome foi realizado com sucesso.";
                } catch (Exception $e) {
                    $conexao -> rollback();
                    throw $e;
                    echo "Algo deu errado, verifique os campos e tente novamente.";
                }
            }
            echo "<br><p><a href='index.php'>Voltar para a página inicial.</a></p>"
        ?>
    </main>
</body>
</html>