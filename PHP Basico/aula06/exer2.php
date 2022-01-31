<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css">
        <title>Aula 06 - Operadores de Atribuição</title>


    </head>

    <body>

        <div>

            <p>Mostrar qual foi o ano anterior ao ano atual.</p>                

            <?php
    
                $anoatual= $_GET["aa"];
                //primeiro me mostre o resultado e tire a variável (-1 no caso).
                echo"<br>O ano Atual é $anoatual, e o ano anterior é " . $anoatual--; //concatenando para se obter um pré decremento como resultado. Ou seja, antes de mostrar o resultado. Logo, ele não retira 1 como esperado.
                //primeiro tire o resultado atual (-1 no caso) e me mostre o resultado.
                echo"<br>O ano Atual é $anoatual, e o ano anterior é " . --$anoatual; //concatenando para se obter um pré decremento como resultado. Ou seja, antes de mostrar o resulatdo, se tire 1. E como foi feita uma função acima, ele vai retirar 2, como resulatdo final.
            ?>

    </div>



    </body>







</html>