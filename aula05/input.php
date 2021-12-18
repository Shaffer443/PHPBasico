<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"> <!--carregando o arquivo css para aula-->
        <title>Aula 05 - Operadores aritiméticos inputados pelo usuário</title>


    </head>

    <body>

        <div>
             
            <p>Valores de A e B será inserido pelo usuário pelo navegador web <br></p>

            <?php
    
                $n1= $_GET["a"]; //Valor de "a" foi ou será inserido no vanegador web - http://localhost/aula05/input.php?a=10&b=20
                $n2=$_GET["b"]; //Valor de "b" foi ou será inserido no vanegador web - http://localhost/aula05/input.php?a=10&b=20
                echo "<h3>valores recebido: a = $n1 e b = $n2</h3>";
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