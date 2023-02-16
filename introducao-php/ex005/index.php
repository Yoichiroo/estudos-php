<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Teste dos tipos primitivos</h1>
    <?php
    /* O PHP é fracamente tipado, ou seja, todas os elementos são tipados dinamicamente. Existem os tipos escalares, compostos e especiais. Aqui focaremos nos tipos primitivos escalares.

        Temos as variáveis:

        $sobrenome = 'Silva';   String (Cadeia de caracteres)
        $idade = 34;    int ou integer (Um valor numérico inteiro, sem a parte decimal.)
        $peso = 85.9;   float, double ou real (Valor decimal, com o valor depois do ponto flontuante - A palavra real deixou de existir a partir do PHP 7.4)
        $casado = true; bool ou boolean (Valores lógicos que aceitam apenas true e false.)
    
        Mais exemplos dos tipos primitivos:

        "RJ" (String)
        3.1415 (Float ou double)
        17 (Int ou Integer)
        true (bool ou boolean)
        "" (String)
        -19 (Int ou Integer)
        "false" (String)
        0x1A (Int ou Integer) - Base em hexadecimal
        3e2 (Float ou doble) - Potência
        "1024" (String) 

        Ex. da aula:
            0x - hexadecimal ; 0b - binário ; 0 = octal
            $num = 0x1A;
            echo "O valor da variável é $num";
            
            $num2 = 3e2; // 3 x 10^2

            $num3 = (integer) 5e7 // 5 x 10^7 - coerção (Forçar este número para ser um inteiro)
            
            $num4 = (float) "950";
            var_dump($num);

    Outros ex:

    $var = "Lucas";
    var_dump($var);
    echo "<br>";
    
    $casado = true;
    var_dump($casado);
    echo "<br>";
    echo "O valor para casado é $casado";


    Tipos primitivos compostos e especiais:

    Compostos: 
        Array  (Vetor)
        Object (objeto)

    Especiais:
        null
        resource
        callable
        mixed   (Tipo primitivo que representa todos os outros tipos primitivos.)
    */

    $vet = ["Maria", 9.7, false, 6, "Hugo", 1204.56];
    var_dump($vet);
    
    class Pessoa {
        private string $nome;
    }

    echo "<br><br>";

    $p = new Pessoa;
    var_dump($p);
    ?>
</body>
</html>