<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando com PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        require_once 'includes/abre-banco.php';

        $ref = $_REQUEST['ref'] ?? '';

        if(empty($ref)) {
            echo "<p>&#x274C; Erro na chamada.</p>";
        } else {
            $renavam = $_REQUEST['fren'] ?? '';
            $modelo = $_REQUEST['fmod'] ?? '';
            $marca = $_REQUEST['fmar'] ?? '';
            $ano = $_REQUEST['fano'] ?? '';
            $cor = $_REQUEST['fcor'] ?? '';
            $preco = $_REQUEST['fpre'] ?? '';

            $sql = "UPDATE veiculos SET renavam = '$renavam', modelo = '$modelo', anofab = '$ano', cor = '$cor', preco = '$preco' WHERE renavam = '$ref' LIMIT 1";

            // echo "<p>Vou executar o comando $sql</p>";

            $comando = $conex -> prepare($sql);
            try {
                $conex -> beginTransaction();
                $comando -> execute();
                $conex -> commit();
                $afetados = $comando -> rowCount();

                if ($afetados <= 0) {
                    echo "<p>&#x274C; Algo deu errado e nada foi alterado.</p>";
                } else {
                    echo "<p>&#x2705; Veículo $modelo da $marca foi alterado com sucesso!</p>";
                }
            } catch (Exception $e){
                $conex -> rollBack();
                echo "&#x274C; Não consegui alterar o veículo $ref";
            }
        }
        echo "<p><a href='index.php' class='btn'>Voltar</a></p>";
        require_once 'includes/fecha-banco.php';
    ?>
    
</body>
</html>