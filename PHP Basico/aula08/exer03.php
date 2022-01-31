<!DOCTYPE html>
<html lang="pt-br">

    <head>
       <!--Demostrando que o PHP pode ter vários, em diversos locais e amnter os dois.-->
        <?php
            //Informações vinda do formulário.

            $txt = isset($_GET["t"])?$_GET["t"]:"Sem Texto"; //usando parâmetros para caso não tenha preenchimento no html.
            $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt"; //Além das opções, usei um tamanhho padrão, no caso de não haver preenchimento.
            $cor = isset($_GET["cor"])?$_GET["cor"]: "#000000"; //Além das opções, usei uma cor padrão, no caso de não haver preenchimento.



        ?>



        <meta charset="UTF-8"/>
	    <link rel="stylesheet" href="_css/estilo.css">
        <title>Integração HTML5 + PHP - Aula 08</title>

             <style> /*Para não mexer em um otro arquivo .css, criamos o parametro aqui mesmo no html*/

                span.texto{ /*parametros do echo no php mais abaixo*/

                    font-size: <?php echo $tam; ?>; /* Deste modo inserimos uma variável php dentro do css*/
                    color: <?php echo $cor; ?>;

                }




            </style>


    </head>

    <body>

	<div>	
        

	    <?php //Usado para as respostas, do PHP acima e suas particularidades.

            echo "<span class='texto'> $txt <span>"; //A class deste <span>, está configurado acima no <style>

           

    
    		?>

        <a href="modelohtmlexer03.html"><br><br><b>Voltar<b></a>
	</div>

    </body>







</html>