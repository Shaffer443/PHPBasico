<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8"/>
	<link rel="stylesheet" href="_css/estilo.css">
        <title>Aperador Unário - Aula 07 | Exercício 02</title>


    </head>

    <body>

	<div>	
        <P>Vamos permitir que o usuário passe as notas pela url. Calcular a média e obter a situação deste usuário entre aprovado e reprovado.</P>

	    <?php

            //exemplo de escrição da operação na url: http://localhost/aula07/operadorunarioexer02.php?a=5&b=3
           

            $nota1 = $_GET["a"]; //nota 1 de "a" na url.
            $nota2 = $_GET["b"]; //nota 2 de "a" na url.
            
                 echo "Primeira nota $nota1 e segunda nota $nota2 .";

            $media = ($nota1+$nota2)/2;

            $resultado = $media<7 ? "Reprovado" : "Aprovado"; // se o $resultado for menor que 7, reprovado. caso inverso, aprovado.
    
    	         echo "<br>Com média $media, a situação do aluno é $resultado .";

                  
        
        ?>

	</div>

    </body>







</html>