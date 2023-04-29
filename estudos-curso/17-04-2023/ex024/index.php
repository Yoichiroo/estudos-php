<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // FORMA 1
        // if (isset($_REQUEST["inicio"])) {
        //     $inicio = $_REQUEST["inicio"];
        // } else {
        //     $inicio = ""; 
        // }
        $inicio = $_REQUEST["inicio"] ?? "";
        $fim = $_REQUEST["fim"] ?? "";
    ?>
    <main>
        <h1>Contagem em PHP</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="inicio">Início</label>
            <input type="number" name="inicio" id="inicio" value="<?=$inicio?>">
            <label for="fim">Fim</label>
            <input type="number" name="fim" id="fim" value="<?=$fim?>">
            <input type="submit" value="Contar">
        </form>
    </main>
    <?php if (!empty($inicio) && !empty($fim)) { ?>
        <section>
            <h2>Resultado final</h2>
            <p>
                <?php 
                    $cont = $inicio;
                    // REPETIÇÃO COM TESTE NO INÍCIO
                    // while ($cont <= $fim) {
                    //     echo "$cont, ";
                    //     $cont++;
                    // }


                    // REPETIÇÃO COM TESTE NO FINAL
                    // do {
                    //     echo "$cont,";
                    // } while ($cont <= $fim);
                    // echo "FIM";


                    for ($cont = $inicio; $cont <= $fim; $cont++) {
                        echo "$cont, ";
                    }

                    echo "FIM";

                ?>
            </p>
        </section>
    <?php } ?>
</body>
</html>
