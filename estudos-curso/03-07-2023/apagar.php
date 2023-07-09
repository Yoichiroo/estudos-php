<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagando Registros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        require_once 'includes/abre-banco.php';
        $ref = $_GET['ref'] ?? '';
    
        if (empty($ref)) {
            echo "<p>&#x274C; Erro na chamada.</p>";
        } else {
            $sql = "DELETE FROM veiculos WHERE renavam = $ref LIMIT 1";
            $comando = $conex->prepare($sql);
            try {
                $conex->beginTransaction();
                $comando->execute();
                $conex->commit();
                $afetados = $comando->rowCount();
                if ($afetados >= 0) {
                    echo "<p>&#x2705; Ao todo foram apagados $afetados veículo(s).</p>";
                } else {
                    echo "<p>Algo deu errado e nada foi apagado.</p>";
                }
            }catch (Exception $e){
                $conex->rollback();
                //throw $e;
                echo "<p>&#x274C; Não foi possível apagar o veículo $ref.</p>";
            }        
        }
        echo "<p><a href='index.php' class='btn'>Voltar</a></p>";
        require_once 'includes/fecha-banco.php';
    ?>
</body>
</html>