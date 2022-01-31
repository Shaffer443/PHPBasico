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

            $nome= $_GET["nome"];
            $ano= $_GET["ano"];
            $sexo= isset($_GET["g"])?$_GET["g"]: "[Não Informado]"; // Usando esse operador unário, posso dar um opção, caso não haja nenhuma marcação neste campo.
                //posso usar o isset() em qualquer campo, como paleativo nesta situação. MAs evita erros, como por exemplo, abrir a página .php direto
                $idade = date("Y") - $ano; //Date informa o ano atual automaticamente.
                                         // (Y) mostra o ano com 4 dígitos e (y) mostra o ano com 2 dígitos.   
                    echo "$nome tem $idade anos. <br>Do Gênero: $sexo .";
            
           


    
    		?>

        <a href="modelohtmlexer02.html"><br><br><b>Voltar<b></a>
	</div>

    </body>







</html>