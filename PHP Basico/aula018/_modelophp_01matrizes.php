<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP | Aula - 18 | Vetores e Matrizes (Parte 1) - CursoemVideo.com</title>
</head>
<body>
<div>
  <p>Matrizes</p>
    <pre>
    <?php

    /* tada matriz em PHP é um vetor dentro de vetor */

    $m = array (array (2,3), 
                array(3,4), 
                array(9,5));

    $m[2][0] = $m[1][1]; 
    /* Siginifica que a posição $n[2][0], que é igual a 9, receberá o valor de
    $n[1][1] = 4. Onde deixará de ter o valor 9 e passará a vaer 4. */
      
    print_r($m);

    ?>
    </pre>
</div>
</body>
</html>
 