<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css">
        <title>Aula 06 - Operadores de Atribuição</title>


    </head>

    <body>

        <div>

            <p>Variáveisd e Variáveis.</p>                

            <?php

                $x="abc";
                $$x="def";
                echo "A variável X é $x";
                echo"<br>A variável da variável X é $abc"; // a variável $x virou uma outra variável denominada $abc, quando usamos um "$" na frente da primeira variável.

                //Crimaos uma variável nova, dentro da variável existente. X contém "abc", e abc contém "def".
                
            ?>

    </div>



    </body>







</html>