<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciando imagens em Banco de Dados</title>
</head>
<body>
    <?php 
    include("conexao.php");

        if(isset($_GET['del'])) {
            $id = intval($_GET['del']);
            $sql_query = $mysqli->query("SELECT * FROM arquivos WHERE id = $id");
            $arquivo = $sql_query->fetch_assoc();

            if(unlink($arquivo['path'])) {
                $deu_certo = $mysqli -> query("DELETE FROM arquivos WHERE id = '$id'") or die($mysqli->error);
                if($deu_certo) {
                    echo "<p>Arquivo excluído com sucesso!</p>";
                }
            }
        }


    // Verifica se foram enviados arquivos
    if(isset($_FILES['arquivos'])) {
        
        $arquivos = $_FILES['arquivos'];
        $tudo_certo = true;

        foreach($arquivos['name'] as $index => $arq){
            $deu_certo = enviar_arquivo($mysqli, $arquivos['error'][$index], $arquivos['size'][$index], $arquivos['name'][$index], $arquivos['tmp_name'][$index]);
            if(!$deu_certo) {
                $tudo_certo = false;
            }
        }

        if($tudo_certo) {
            echo "<p>Todos os arquivos foram enviados com sucesso.</p>";
        } else {
            echo "<p>Falha ao enviar um ou mais arquivos.</p>";
        }
    }

    // Função para enviar arquivos
    function enviar_arquivo($mysqli, $error, $size, $name, $tmp_name) {
        if($error) {
            echo "Falha ao enviar o arquivo: $error";
            return false;
        }

        if ($size > 2097152) {
            echo "Arquivo muito grande! Max: 2mb";
            return false;
        } 

        $pasta = 'arquivos/';
        $nome_do_arquivo = $name;
        $novo_nome_do_arquivo = uniqid();
        $extensao = strtolower(pathinfo($nome_do_arquivo, PATHINFO_EXTENSION));

        if($extensao != "jpg" && $extensao != "png") {
            echo "Tipo de arquivo não aceito!";
            return false;
        }

        $path = $pasta . $novo_nome_do_arquivo . "." . $extensao;
        $deu_certo =  move_uploaded_file($tmp_name, $path); 
        
        if($deu_certo) {
            $sql = "INSERT INTO arquivos (nome, path) VALUES ('$nome_do_arquivo','$path')";
            if ($mysqli->query($sql) === TRUE) {
                return true;
            } else {
                echo "Erro ao inserir no banco de dados: " . $mysqli->error;
                return false;
            }
        } else {
            echo "Falha ao mover o arquivo para o destino.";
            return false;
        }
    }

    // Seleciona os arquivos do banco de dados
    $sql_query = $mysqli->query("SELECT * FROM arquivos");
    if (!$sql_query) {
        echo "Erro ao executar consulta: " . $mysqli->error;
    }
    ?>
    <form action="" enctype="multipart/form-data" method="post">
        <p>
            <label for="arquivos">Selecione o arquivo</label>
            <input multiple type="file" name="arquivos[]" id="arquivos">
        </p>
        <button type="submit">Enviar</button>
    </form>
    <table border="1" cellpadding='10'>
        <thead>
            <th>Prévia</th>
            <th>Arquivo</th>
            <th>Data de Envio</th>
            <th></th>
        </thead>
        <tbody>
            <?php 
            if ($sql_query && $sql_query->num_rows > 0) {
                while($arquivo = $sql_query->fetch_assoc()) { 
            ?>
                <tr>
                    <td><img height='50' src="<?=$arquivo['path']?>" alt=""></td>
                    <td><a target="_blank" href="<?=$arquivo['path']?>"><?=$arquivo['nome']?></a></td>
                    <td><?=date("d/m/Y H:i", strtotime($arquivo['data_upload']));?></td>
                    <td><a href="index.php?del=<?=$arquivo['id']?>">Deletar</a></td>
                </tr>
            <?php 
                }
            } else {
                echo "<tr><td colspan='3'>Nenhum arquivo encontrado.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
