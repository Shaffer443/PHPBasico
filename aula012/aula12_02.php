<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Aula 12 - Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <p>Script para calcular o fatorial de um número inteiro.</p> 
    <?php
        $n = $_GET["valor"];
        echo "<h2> Calculando Fatorial de $n </h2>";
        
        $c=$n;
        $fat = 1;
        do{

          $fat = $fat * $c;
          $c--;
          
        }while($c>=1);

        echo "$n ! = $fat";
    ?>
    <p><a href="aula12_02.html" class="botao"> Voltar </a></p>
</div>
</body>
</html>
 