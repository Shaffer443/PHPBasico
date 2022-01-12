<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <p>Modelo de Estrutura FOR:</p>
    <p>Mostrar várias contagens utilizando a estrutura FOR.</p>
    <?php

        for($c=1;$c<=10;$c++){ /*progressivo*/

          echo "$c "; 

        }

        echo "<br>";

        for($i=10;$i>=1; $i--){ /*regressivo*/
          echo "$i ";

        }

        echo "<br>";

        for($i=40;$i>=0; $i-=2){ /*regressivo, retirando de 2 em 2*/
          echo "$i "; /* ou print */

        }


        
    ?>
</div>
</body>
</html>
 