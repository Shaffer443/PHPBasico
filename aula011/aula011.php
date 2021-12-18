<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <p>Mostre uma contagem progressiva de 1 até 10</p>
    <?php

      $n = 1;
      $n1 = 10;

      while($n <= 10){

        echo $n;
        $n += 1;
        /* Contagem progressiva */
      }

      while($n1 >= 1){

        echo "<br>".$n1;
        $n1 -= 1;
        /* Contagem regressiva 10 a 1, em 1 em 1*/
      }


        
    ?>
</div>
</body>
</html>
 