<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP | Aula 18 - CursoemVideo.com</title>
</head>
<body>
<div>
  <p>Funções em PHP:</p>
    <?php

    /* Função PRINT_R: */

    echo "<b>Função PRINT_R</b> <br><br>";

    $a = array ("a", "b", "c", "d");
    print_r($a);
    var_dump($a); /* mostragem mais completa */

    echo str_repeat("-", 80)."<br>"; /* Repete X vezes a string */

     /* Função COUNT: */

     echo "<b>Função COUNT</b> <br><br>";

     /* Conta quantos elementos existem no vetor */

     echo "O vetor tem ".count($a)." elementos";
     /* (.) serve de concatenação */

     echo "<br>".str_repeat("-", 80)."<br>"; /* Repete X vezes a string */

     /* Função Adiconar elementos: PILHA ou LIFO */

     echo "<b>Função Adicionar Elementos na Ultima posição</b> <br><br>";

      $a[] = "o";

      var_dump($a); /* Como foi adicionado depois, 
                    mostrará com o novo elemnto o mesmo arrey de antes */

                    echo "<br>".str_repeat("-", 80)."<br>"; /* Repete X vezes a string */

      /* Função para Gerenciar os Primeiros Elementos: */

     echo "<b>Função Adicionar Elementos no início</b> <br><br>";

     array_unshift($a,"z");
     array_unshift($a,"P");
     /* adiciona um elemnto no inicio do vetor */
     var_dump($a);

     /* apagando primeiro elemento do vetor */

     array_shift($a);
     var_dump($a);

     echo "<br>".str_repeat("-", 80)."<br>"; /* Repete X vezes a string */

      /* Função Ordenar Elementos: */

     echo "<b>Função Ordenas Elementos:</b> <br><br>";

     /* Pode ordenas tanto números quanto letras */

      $b = array ("d", "f", "a", "b", "e", "c");

      sort($b); /* organiza o vetor */
      var_dump($b); /* imprime a nova ordem */

      echo "<i>Ordem Reversa</i><br>" ;
      
      rsort($b);
      var_dump($b);

      echo "<i>Ordem Associativa</i><br>" ;

      /* Colocar em ordem os valores ou strings dentro dos vetores, 
      porém não altera o valor dos índices. Ou seja, "carrega" os índices juntos com os valores */

      asort($b);
      var_dump($b);

      echo "<i>Ordem Associativa Reversa</i><br>" ;

      /* Colocar em ordem reversa os valores ou strings dentro dos vetores, 
      porém não altera o valor dos índices. Ou seja, "carrega" os índices juntos com os valores */

      arsort($b);
      var_dump($b);

      echo "<i>Ordenação por Chaves</i><br>" ;

      /* Colocar em ordem crescente os valores das chaves (key ou índices), ignorando os valores ou strings
      dentro desses índices. O foco desta função e organizar de forma crescente os valores dos ídeices, levando junto seu conteúdo */

      ksort($b);
      var_dump($b);

      echo "<i>Ordenação por Chaves Rerversa (Decrescente)</i><br>" ;

      /* Colocar em ordem decrescente os valores das chaves (key ou índices), ignorando os valores ou strings
      dentro desses índices. O foco desta função e organizar de forma decrescente os valores dos ídeices, levando junto seu conteúdo */

      krsort($b);
      var_dump($b);

        
    ?>
</div>
</body>
</html>
 