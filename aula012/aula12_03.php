<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Aula 12 - Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <p>Script para calcular a Tabuada de um número inteiro.</p> 
    <?php
        $n = $_GET["valor"];
        echo "<h2> Tabuada de $n </h2>";
        
        $c=1;
        //$fat = 1;
        do{

          $fat = $n * $c;
          echo "$n x $c = $fat <br>";
          $c++;

          
        }while($c<=10);

        
    ?>
    <p><a href="aula12_exerc03.html" class="botao"> Voltar </a></p>
</div>
</body>
</html>
 