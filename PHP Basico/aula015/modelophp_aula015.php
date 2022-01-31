<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP Aula: 15 - CursoemVideo.com</title>
</head>
<body>
<div>
  <p>Explicação da Aula 15: Passagem por VALOR e REFERÊNCIA.</p>
    <?php

      /* Passagem por VALOR: É onde a função pega apenas o valor dentro
      da variável*/

      function testevalor($xv){ /* o valor de $a, passa para $xv devido a chamar a função: testevalor($a); */

        $xv = $xv + 2;
        echo " Resultado do Teste VALOR $xv <br>";

      }

      $a = 3;
      testevalor($a);
      echo " Resultado de fora da função Teste Valor: $a <br>"; /* Mostrará o valor de 3 e não 5, devido a puxar o valor 
      apenas para passar na função*/

      function testereferencia(& $xr){

        $xr = $xr + 2;
        echo "Resultado do Teste REFERÊNCIA $xr <br>";



      }

      $a = 3;
      testereferencia($a);
      echo "Resultado de fora fa função Teste REFERÊNCIA $a <br>"; /* Mostrará o valor de 5 e não 3, devido a puxar a variável 
      e não apenas o seu valor, para passar na função*/
        
    ?>
</div>
</body>
</html>
 