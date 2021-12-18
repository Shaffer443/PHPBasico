<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/> <!-- Carregando um estilo css feito para o curso em video-->
        <title>Aula 04 - Variáveis e Concatenação em PHP</title>


    </head>

    <body>

        <div>

            <p>Nome e Idade do usuário do curso:<br></p>

            <?php
        

                $idade = 37; //Variável qualquer chamada N de valor 4.
                $nome = "Rafael Gouveia"; //Variável qualquer, chamada "nome" de valor textual "Rafael". <br> pulando linha.
                echo $nome; //informar os dados da viariável "nome". como um "printf" em C.
                echo "<br>"; //pulando linha entre as informações.
                echo $idade; //informa os dados da variável idade.
                echo "<br><br> ou <br><br>";
                echo $nome. " tem  ". $idade. " anos."; //concatenando as duas informações usando (.).
                //também se pode concatenar sem usar os pontos (.)
                echo "<br>"; //pulando linha entre as informações.
                echo "$nome tem $idade ano de vida."; //colocando tudo dentro das aspas duplas("") no echo. se colocar as pas simples (''), ele apenas lê o codigo sem interpretar.

              ?>

        </div>

    </body>







</html>