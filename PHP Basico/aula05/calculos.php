<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"> <!--carregando o arquivo css para aula-->
        <title>Aula 05 - Operadores aritiméticos</title>


    </head>

    <body>

        <div>
             
            <p>Valores: A = 10 e B = 25 <br></p>

            <?php
    
                $n1=10;
                $n2=25;
                $soma = $n1 + $n2;
                echo "Resultado da soma é $soma"; //um modo de se ter o resultado
                echo "<br>"; //pulando linhas.
                echo "Somando, Resultado é ". ($n1+$n2); //fazendo a concatenação mais a soma.
                echo "<br>"; //pulando linha.
                echo "Subtraindo, Resultado é ". ($n1-$n2); //fazendo a concatenação mais a subtração.
                echo "<br>"; //pulando linha.
                echo "Multiplicando, Resultado é ". ($n1*$n2); //fazendo a concatenação mais a multiplicação.
                echo "<br>"; //pulando linha.
                echo "Dividindo, Resultado é ". ($n1/$n2); //fazendo a concatenação mais a divisão.
                echo "<br>"; //pulando linha.
                echo "Módulo (resto da divisão), Resultado é ". ($n1%$n2); //fazendo a concatenação mais a módulo.

                echo "<br> Expressões:<br>"; //apenas texto.
                $media = ($n1+$n2)/2;
                echo "Resultado da média entre A e B é $media"; //Resulatdo da média de n1 e n2.
    
            ?>

        </div>>


    </body>







</html>