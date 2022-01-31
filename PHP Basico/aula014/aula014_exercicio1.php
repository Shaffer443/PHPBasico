<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP: Aula 014 - CursoemVideo.com</title>
</head>
<body>
<div>

<p>Exercício 01: Criar um procedimento que some dois valores numéricos interios.</p>
    <?php
        
        /* FUNCTION - Cria uma função em PHP.*/

      function soma($a,$b){

        $s=$a+$b;
        echo "<p>Soma igual a $s.</p>";

      }

      /* Chamando a função e passando um parametro */

      soma(4,5);
      soma(12,56);
      soma(6,8);

      $x = 5;
      $y = 10;

      soma($x,$y);

    ?>
<p>Essas funções não retornam, segundo o PHP, são VOID.</p>
</div>
</body>
</html>
 