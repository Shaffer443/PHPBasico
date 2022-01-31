<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
<p>Aula 11 - Exercício 02</p>
    <p>Criar dinamizamente 5 caixas de texto em um formulário.</p>
    <form method="get"  action="aula011.2.1.php">
        
        <?php
            $c = 1;
            while ($c <= 5){
                echo "valor $c:<input type='number' name='v$c' max='100' min='0' value='0'><br>";
            $c+=1;
            }
            
        ?>

        <input type="submit" value="enviar" class="botao">
        
        <!--Usado aspas simples no VALOR1, devido ai echo já usar aspas duplas-->
        <!--Value == default-->


    </form>

    
    
    <?php

     


        
    ?>
</div>
</body>
</html>
 