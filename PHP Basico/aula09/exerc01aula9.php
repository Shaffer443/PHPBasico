<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php

      /* Recebe o Ano em html e passa a informação*/
      /* "a" variável ano*/

      $a = isset($_GET["ano"])?$_GET["ano"]: "Ano Não informado";
        

        $i = date("Y") - $a; /*Lembrando que Y em maiusculo pega o formato de ano com 4 dígitos */

      echo "Você nasceu em $a. Hoje com $i anos. <br><br>";

      if( $i >= 18){

        /* Dois modos de se obter o mesmo resultado*/

        /* 
        Echo "Com $i você já pode Dirigir. <br>";
        Echo "Com $i você já pode Votar.";
        */

        $v = "Pode Votar";
        $d = "Pode Dirigir";

      } else{

        /* Dois modos de se obter o mesmo resultado*/

        /*
        Echo "Com $i você NÂO pode Dirigir. <br>";
        Echo "Com $i você NÂO pode Votar.";
        */

        $v = "Não Pode Votar";
        $d = "Não Pode Dirigir";

      }

      echo "Permissões: $v e $d .";
      
      


    ?>
</div>
</body>
</html>
 