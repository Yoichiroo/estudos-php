<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h1>Strings em php</h1>
    <?php
        /*
            Strings em PHP

            Existem 4 tipos de strings no php {
                
                double quoted (" ") - Como as crases no JS moderno
                single quoted (' ')
                Heredoc
                Nowdoc

            }

            A double quoted usamos para escrever qualquer coisa dentro da String. Nestas aspas dulpas, existe a interpretação do conteúdo inserido na string. {
                Ex: "PHP \u{1F418}"
                    Como temos a interpretação, veremos que esta expressão se dá num código unicode, que tem a representação visual de um elefante.
            }
            Em constantes, essa interpretação de conteúdo não funciona, já que a constante não é considerada uma variável, ou seja, não consegue realizar a interpolação {
                Para mostrarmos uma constante, podemos usar  o operador de concatenação para juntar a constante à uma string. Explicaremos o concatenation operator abaixo.
            }

            Na single quoted, não temos esta interpretação de conteúdo, ou seja, a representação da string será feita exatamente como a string é, independente se temos um unicode, variável e etc;

            Temos um operador próprio para a concatenação de strings, onde em JS seria o "+", aqui usamos o "." Chamamos de concatenation operator. Em PHP, o "+" serve apenas para adição {
                Ex: "Curso" . "PHP"; {
                    Isto resultará em "CursoPHP"
                }
            };

            Caso queiramos imprimir o nome de algum artista ou esportista, como podemos fazer no caso das aspas duplas no nome artístico?{
                Neste caso, temos as ESCAPE SEQUENCES {
                    \n - Nova linha
                    \t - Tabulação horizontal
                    \\ - Barra invertida
                    \$ - Cifrão
                    \u{} - Codepoint unicode
                }
            };

            Sintaxe Heredoc {
                $curso = "PHP";
                $ano = date('Y');

                echo <<< FRASE
                        Estou estudando 
                            $curso em $ano

                        FRASE;
            };

            Sintaxe Nowdoc {
                $curso = "PHP";
                $ano = date('Y');

                echo <<< 'FRASE'
                        Olá galera do $github"
                                Tudo bem com vocês?
                            Como está sendo o ano de $ano?
                        Abraços! \u{1F596}
                        FRASE;
            };

            A diferença entre a diferença entre o Heredoc e o Nowdoc é justamente na sintaxe, onde as aspas simples do Nowdoc fazem com que o PHP não interprete  o que irá ser mostrado na tela;

            Ex da aula: 

                $nome = "Lucas";
                $sobrenome = "Torres";
                const GITHUB = "<strong>Yoichiroo</strong> \u{1F499}";
        
                //DIFERENÇA ENTRE AMBAS
        
                echo "Olá, $nome $sobrenome! \u{1F596}" . "<br>";
                echo 'Olá, $nome $sobrenome! \u{1F596}' . "<br>";
                echo "Eu adoro o GitHub do " . GITHUB . "<br>"; 
        
                //Interpolação
        
                echo "Estamos no ano de " . date("Y") . "<br>";
        
                $nom = "Rodrigo";
                $snom = "Nogueira";
        
                echo "$nom \"<strong> Minotauro </strong>\" $snom";

                $nome = "Lucas";
                $sobrenome = "Torres";
                $apelido = "<strong>Gafanhoto</strong>";
        
                echo "$nome <br> \"$apelido\" <br> $sobrenome";
        */

        $github = "Yoichiroo";
        $ano = date('Y');

        echo <<< TESTE
            Olá galera do $github"
                Tudo bem com vocês?
                    Como está sendo o ano de $ano?
            Abraços! \u{1F596}
                Estes tipos de strings (Heredoc e Nowdoc) são TERRÍVEIS.
            TESTE;
    ?>
</body>
</html>