<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8"/>
	<link rel="stylesheet" href="_css/estilo.css">
        <title>Integração HTML5 + PHP - Aula 08</title>


    </head>

    <body>

	<div>	
        

	    <?php

            $valor= $_GET["v"];
                /*Usaremos a função sqrt() para calcular a raiz quadrada*/ 
            $raiz = sqrt($valor);

                echo"O número digitado foi $valor.<br>E sua raiz é ". number_format($raiz,2);
                /*Concatenando para fomrataçaõ de 2 casas decimais, pós a vírgula.*/

    
    		?>

        <a href="_modelohtml.html"><br><br><b>Voltar<b></a>
	</div>

    </body>







</html>