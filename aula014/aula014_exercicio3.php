<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP: Aula 014 - CursoemVideo.com</title>
</head>
<body>
<div>

<p>Exercício 03: Criar uma soma com múltiplos parâmetros.</p>
    <?php
        
        /* FUNCTION - Cria uma função em PHP.*/

      function soma(){

        $p = func_get_args(); /* Cria um VETOR com todos os argumentos.*/
        $tot = func_num_args(); /* Informa/retorna o número de argumentos. */
        $s = 0; /* vária´vel que gardará as somas*/

        for($i=0; $i<$tot; $i++){

          $s += $p[$i]; /* é a mesma coisa que $s=$s+$p[$i];*/

        }

        return $s;
      }

      /* Chamando a função e passando um parametro */

      $r =  soma(3,5,2);

      /* Cria um vetor para cada número. Exemplo: $p[0] = 3, $p[1] = 5
      e p[2] = 2. depois ele soma tudo e fornece a soma total.*/

      /* podemos colcoar quantos arqumentos qusiermos e ele irá criar
      um vetor para cada um deles*/

      echo "Soma dos valores $r";

    ?>

</div>
</body>
</html>
 