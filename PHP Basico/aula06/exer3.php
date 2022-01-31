<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css">
        <title>Aula 06 - Operadores de Atribuição</title>


    </head>

    <body>

        <div>

            <p>Mostrar Usando e Praticando variáveis referenciadas.</p>                

            <?php
    
                $a=3;
                $b = $a;
                $b += 5;
                echo "A variável 'a' vale $a";
                echo "<br>A variável 'b' vale $b";
                //Como resultado, ele pegou $a é igualou a $b. Logo, na soma de $b ele pega o valor de $a e soma 5. então $a = 3 e $b=8.

                $a1=3;
                $b1= &$a1; //como o & você cria uma referência da variável. logo, toda alteração na referência, também altera a variável referenciada (original)
                $b1 += 5;
                echo "<br><br>A variável 'a1' vale $a1";
                echo "<br>A variável 'b1' vale $b1";
                //Como resultado, ele pegou $a é referenciou a $b. Logo, na soma de $b ele pega o valor de $b e soma 5, mas como $b esta referenciada a $a, o valor de $a muda de 3 para 8 também. 

                
            ?>

    </div>



    </body>







</html>