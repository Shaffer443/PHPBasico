<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP | Aula - 18 | Vetores e Matrizes (Parte 1) - CursoemVideo.com</title>
</head>
<body>
<div>
  <p>Atividade 01:</p>
  <pre>
    <?php
    /* Usando ARRAY */
    $n = array (3,5,8,2);
    $n[] = 7; /* para adicionar item ao final do vetor */
    print_r($n);

    /* Usando RANGE */

    $c = range (5,20,5);
    print_r($c);

    /* posição 1 = o 5 fica na posição $c = [0] . 
      posição 2 = o 20 é alocado na ultima casa, é o ultimo valor do range. $c [4] = 20 . 
      posição 3 = 5, é o núemro de espaços para a formação da matriz. no caso 4 (5-1).
      obs: o valor da posição FINAL, indica o número de contagem do vetor. que no caso é de 5 em 5 
      Ou seja: comece no 5, vá até o 20, de 5 em 5, completando os 4 espaços do vetor */
    $d = range(2,40,3);
    print_r($d);    

    /* usando FOREACH */

    /* Usa cada elemnro da dentro da variável, como um valor. Melhora a impressão na tela */

    $e = range (5,100,10);
    foreach ($e as $mostra){

      echo "$mostra ";
    }

    /* Configuran Chaves Persnalizadas */

    $f = array (1=>"a", 3=>"b", 6=>"c", 8=>"d");
    
    unset($f[1]); /* retira o índice indicado */
    print_r($f);
    /* Vo cê escolhe em qual posição do índice cada elemento vai ocupar */
    /* => - SIgnifica associção, é não igual ou maior. */

    /* Chaves Associativas */

    /* Mistura strig e numeros */

    $g = array("Nome" => "Rafael",
                "Idade" => 37,
                "Peso" => 76.5);
    
    $g["Status:"] = "Estudante"; /* Adiciona um novo índice com o nome Status e a variável ESTUDANTE */
    print_r($g);

    echo "<br>";

    /* usando um FOREACH: */ 

    foreach($g as $campo => $conteudo){

      echo " O Conteúdo dos campos $campo, é $conteudo <br>";

    }
    

    ?>
    </pre> <!-- Tag pré, só melhora a visualização -->
</div>
</body>
</html>
 