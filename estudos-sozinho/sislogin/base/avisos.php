<?php 
    $msg = $_REQUEST['msg'] ?? '';
    $tipo_msg = $_REQUEST['tipo_msg'] ?? '';

    if(!is_null($msg)) {
        if($tipo_msg == 'edit') {
            switch($msg) {
                case 1:
                    echo "<div class='alert alert-success' role='alert'>Edição feita com sucesso!</div>";
                    break;
                case 2:
                    echo "<div class='alert alert-danger' role='alert'>Erro ao tentar fazer a edição! Tente novamente.</div>";
                    break;
            }
        } elseif($tipo_msg == 'remove') {
            switch($msg) {
                case 1:
                    echo "<div class='alert alert-success' role='alert'>Exclusão feita com sucesso!</div>";
                    break;
                case 2:
                    echo "<div class='alert alert-danger' role='alert'>Erro ao tentar fazer a exclusão! Tente novamente.</div>";
                    break;
            }
        } else {
            switch($msg) {
                case 1:
                    echo "<div class='alert alert-success' role='alert'>Inserção feita com sucesso!</div>";
                    break;
                case 2:
                    echo "<div class='alert alert-danger' role='alert'>Erro ao tentar fazer a inserção! Tente novamente.</div>";
                    break;
            }
        } 
    }

?>