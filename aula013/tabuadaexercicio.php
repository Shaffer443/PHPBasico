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

      $n =$_GET["num"]; /*isset{$_GET["num"]}?$_GET["num"]:1;*/
      for($c=1;$c<=10;$c++){
        $resultado = $n * $c;
        echo "$n x $c = $resultado <br>";
      }
        
    ?>
    <br><a href="javascript:history.go(-1) ">Voltar</a> 
    <!-- Volatr me javascrip. Quer dizer voltar uma tela antes-->
</div>
</body>
</html>
 