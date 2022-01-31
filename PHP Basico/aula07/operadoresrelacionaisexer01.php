<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8"/>
	<link rel="stylesheet" href="_css/estilo.css">
        <title>Aperadores Lógicos - Aula 07 | Exercício 01</title>


    </head>

    <body>

	<div>	
        <P>Mostrar se um eleitor é obrigado a votar ou não.</P>

	    <?php

            //exemplo de operação lógico na url: http://localhost/aula07/operadoresrelacionaisexer01.php?an=1984
           

            $anonasc = $_GET["an"]; //ano de nascimaneto imputado na url.
                $idade = 2021 - $anonasc; //ano atual subtraido do ano imputado em $anonasc.
            
                 echo "Quem nasceu em $anonasc tem $idade anos.";

            //agora verificar se é ou não obrigado a votar.

            $voto = ($idade >= 18 && $idade < 65)? "Voto Obrigatório." : "Voto Facultativo ou Não Obrigatório.";

                echo "<br>Situação de voto: $voto";



                  
        
        ?>

	</div>

    </body>







</html>