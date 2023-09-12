<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php 
        require_once "includes/abre_banco.php";    
        require_once "includes/header.php"; 
    ?>
    <main>
        <?php 
            $usuario = $_REQUEST['fusu'] ?? '';
            $senha = $_REQUEST['fsen'] ?? '';

            $sql = "SELECT * FROM $tabela WHERE login = '$usuario' LIMIT 1";
            $query = $conexao -> prepare($sql);
            $query -> setFetchMode(PDO::FETCH_ASSOC);
            $query -> execute();
            $total = $query -> rowCount();

            if ($total == 0) {
                echo "<p>&#x274C; Usuário $usuario não foi encontrado no sistema.</p>";
            } else {
                $dados = $query -> fetch();
                if (password_verify($senha, $dados['senha'])) {
                    $_SESSION['logado'] = true;
                    $_SESSION['usuario'] = $dados['login'];
                    header("location:index.php");
                    exit;
                } else {
                    echo "<p>&#x274C; A senha não coincide para o usuário $usuario.</p>";
                }
            }
        ?>
        <p>&#x1F448; <a href="index.php">Voltar</a></p>
    </main>
    <?php 
        require_once "includes/fecha_banco.php";
    ?>
</body>
</html>