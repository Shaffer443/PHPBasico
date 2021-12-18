<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"> <!--carregando o arquivo css para aula-->
        <title>Funções Pré Definidas no PHP</title>

        <style> /* Creado uma modificação extra no h2*/

            h2{

                font: 14pt arial; /*escolhendo tamanho e fonte*/
                font-weight: bold;


            }



        </style>

    </head>

    <body>

        <div>

            <?php
    
                $n1=$_GET["x"]; //inserido o x no navegador - http://localhost/aula05/funcao.php?x=2&y=6
                $n2=$_GET["y"]; //inserido o y no navegador - http://localhost/aula05/funcao.php?x=2&y=6

                echo "<h2> Valores recebido: $n1 e $n2 </h2>"; //Informa os valores inputados no navegador - 

                echo "Valor absoluto de $n2 é " . abs($n2); //informa o valor absoluto
                echo "<br>Valor da potenciação de $n1 <sup>$n2</sup> é " . pow($n1, $n2); //informa o valor x potencia de y.
                echo "<br>Valor da raiz quadrada de $n2 é " . sqrt($n2); //informa o valor da raiz quadrada
                echo "<br>Valor arredondado de 2.4494897427832 é " . round(sqrt($n2)); //informa o valor arredondado de um resultado (no caoso usei o srqt()) ou variavel declarada
                echo "<br>Parte Inteira de 2.4494897427832 é " . intval(sqrt($n2)); //informa da variável inteira de um resultado (no caso usei o srqt()) ou variavel declarada
                echo "<br>Valor de $n1 com duas casas decimais, ou moeda R$ " . number_format($n1,2); //podemos inserir, pós a variável, o número de casas que queremos formatar. no caso, 2 casas.
            
            
            ?>

        </div>


    </body>







</html>