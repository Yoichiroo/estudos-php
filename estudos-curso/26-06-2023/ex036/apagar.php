<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            require_once 'gerenciamento/conexao.php';

            $codRemove = $_REQUEST["removeCar"] ?? '';
            $confirmacao = $_REQUEST["confirmar"] ?? '';
        
            if(empty($codRemove)) {
                echo "<p>&#x274C; Erro na chamada.</p>";
            } else {
                if(empty($confirmacao)) {
                    echo "<p>&#x1F6A8; Quer mesmo apagar o veículo $codRemove?</p>";
                    echo "<p><a href='apagar.php?removeCar=$codRemove&confirmar=s' class='btn'>Sim</a></p>";
                    echo "<p><a href='index.php' class='btn'>Não</a></p>";
                } elseif ($confirmacao=='s') {
                    $sql = "DELETE FROM $table WHERE renavam = $codRemove";
                    $comando = $conex -> prepare($sql);
                    try {
                        $conex -> beginTransaction();
                        $comando -> execute();
                        $conex -> commit();
                        $afetados = $comando -> rowCount();
                        echo "<p>&#x2705; Ao todo foram apagados $afetados veículo(s).</p>";
                    } catch (Exception $e){
                        $conex -> rollback();
                        echo "<p>&#x274C; Não foi possível apagar o veículo $codRemove</p>";
                    }
                    echo "<p><a href='index.php' class='btn'>Voltar</a></p>";
                } else {
                    echo "<p>&#x274C; Erro na chamada.</p>";
                } 
            }    
        ?>
    </main>
</body>
</html>