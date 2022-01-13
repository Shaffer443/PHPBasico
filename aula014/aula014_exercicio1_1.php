<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP: Aula 014 - CursoemVideo.com</title>
</head>
<body>
<div>

<p>Exercício 01: Criar um procedimento que some dois valores numéricos interios, usando retorno da função.</p>
    <?php
        
        /* FUNCTION - Cria uma função em PHP.*/

      function soma($a,$b){

        $s=$a+$b;
        /* echo "<p>Soma igual a $s.</p>"; */
        return $s;

      }

      /* Chamando a função e passando um parametro */

      $x = 5;
      $y = 10;

      $res = soma($x,$y);

      echo "A soma de $x + $y, tem como total $res.<br>";

      /* Outra forma de somar */

      function multi($c,$d){

        return $c*$d;

      }

      $r1 = multi(5,5);

      echo "Resultado da multiplicação $r1.<br>";

      $a = 9;
      $b = 4;

      $r2 = multi($a,$b);

      echo "Resultado da multiplicação entre $a e $b é $r2.";


    ?>
<p>Essas funções usam retorno de função. RETURN.</p>
</div>
</body>
</html>
 