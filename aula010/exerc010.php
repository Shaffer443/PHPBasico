<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com | Aula: 10</title>
</head>
<body>
<div>
    <?php

      $n = isset($_GET["num"])?$_GET["num"]:0; //GET: pega o número do GET. Condição SE (Quando isso; ou isso; isso)
      $o = isset($_GET["operacao"])?$_GET["operacao"]:1;

        switch ($o){ //switch case

          case 1:

            $r = $n * 2;
            break; //Causa uma parada após a execução.

          case 2:

            $r = $n ^ 3;
            break;

          case 3:

            $r = sqrt($n); // ou usar: $n ^ 0.5 ou $n ^ (1/2) 
            break; 

        }

          echo "Resultado solicitado foi <span class='foco'> $r </span>"

            //class do span, ou qualquer outra tag, precisa estar entre aspas simples
            // pode-se usar qualquer tag configurada em css

      
    ?>

    <br><br><a href="exerc010.html" class="botao"> Voltar</a> <!-- Botão de voltar -->
</div>
</body>
</html>
 