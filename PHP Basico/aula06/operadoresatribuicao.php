<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css">
        <title>Aula 06 - Operadores de Atribuição</title>


    </head>

    <body>

        <div>

            <p>Aplicar 10% ao preço de um produto. Depois dar o mesmo deconto ao preço.</p>                

            <?php
    
                $preco = $_GET["p"]; //receber o preço através da url no navegador.
                echo "<br>Preço do produto recebido é R$ $preco";

                $precof = $preco += ($preco*0.10); //adição de 10% no preço.
                echo"<br>Preço final com ajuste de 10% é R$". number_format($precof,2); //usando formataçaõd e casas decimais.
            
                echo "<br>Aplicando 10% de Desconto:";
                $precod = $preco -= ($preco*0.10); //subtração de 10%
                echo "<br>Com 10% de desconto, o preço fica R$". number_format($precod,2); 
                //falhando na diminuição correta
            
            
            ?>

    </div>



    </body>







</html>