<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8"/>

        <title>Primeiro Exemplo PHP</title>

        <style>
            /*inserindo coódgo de css para manipular o h2 do php*/
            h2{ 
                color:blueviolet;
                text-shadow: 1px 1px 1px black ;
            }

        </style>


    </head>

    <body>

        <h1> Testando PHP</h1>

        <!-- Esta TAG abaixo é chamada de supertag -->
        <?php //Estamo usando PHP dentro do html.  

            echo "<h2> Olá Mundo! </h2>" /*pode usar funçõesd e html, como h1, h2, br e afins dentro da tag php. Exemplo echo "<h2> Ola mundo </h2>"*/
        ?>    

    </body>








</html>