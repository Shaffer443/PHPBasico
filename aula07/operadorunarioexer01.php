<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8"/>
	<link rel="stylesheet" href="_css/estilo.css">
        <title>Aperador Unário - Aula 07 | Exercício 01</title>


    </head>

    <body>

	<div>	
        <P>Vamos permitir que o usuário escolha entre somar e multiplicar dois números.</P>

	    <?php

            //exemplo de escrição da operação na url: http://localhost/aula07/operadorunarioexer01.php?a=5&b=3&op=s
            // s = soma / m = multiplicação.

            $n1 = $_GET["a"]; //nuemros de "a" na url.
            $n2 = $_GET["b"]; //nuemros de "a" na url.
            $tipo = $_GET["op"]; //Tipo da operação, no caso será multiplicação ou soma, dependendo da numeração inserida em $a e $b.

                 echo "Os Valores passados foram $n1 e $n2";

            $resultado = ($tipo == "s") ? $n1+$n2 : $n1*$n2; // se o $resultado for iagual a "s", aplica-se a funação de soma, se não, a multiplicação.
    
    	         echo "<br>Resultado $resultado";

                 /* se colocar op="s" na url ele vai somar. QUaluer outra letra,ele vai multiplicar. Logo, para essa expressão
                 '''só o "s" importa, pois é a chave da operação, e sua escolha da função.*/
        
        ?>

	</div>

    </body>







</html>