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

      $n = $_GET["numero"];

      echo "Analisando se o número $n é Primo... <br>";

      for($c=1;$c<=$n;$c++){
        $multiplos = $n % $c++;
        $primo = $multiplos;
        
        
        
        if($primo > 1){
          echo "<br>Total Multiplos Primos = $primo <br>";                
        }
      
      for($valores=0;$valores<=$n;$valores++){
        $valores += $primo;

        
        echo "<br>Valores Multiplos Primos = $valores <br>";
        
      
      }
        

      }

      
      
       
        
    ?>
    <br><a href="javascript:history.go(-1) ">Voltar</a> 
</div>
</body>
</html>
 