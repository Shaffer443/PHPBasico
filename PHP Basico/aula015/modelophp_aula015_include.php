<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP Aula: 15 - CursoemVideo.com</title>
</head>
<body>
<div>
  <p>Explicação da Aula 15: Usando o INCLUDE. Chamando Funções externas em outro arquivo .php</p>
    <?php

      /* include - Arquivo continua o script se der erro na chamada da função.
      usado quando a continuidade do arquivo e informaç~~oes são relevantes, caso haja problemas.*/
      /* require - Arquivo para o script se der erro na chamada da função. Caso não possa haver erro
      na chamada da função ou tags*/

      include "modelophp_aula015_include_funcoes.php";

      ola();
      mostraidade(37);
        
    ?>
</div>
</body>
</html>
 