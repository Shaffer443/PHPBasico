<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Aula 12 - Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <p>Mostrar um contagem progressiva de 1 até 10.</p> 
    <?php
        $c=1;
        while($c<=10){ //Via while

          echo $c;
          $c++;
          
        };
        
        $c1=1; //Valor que inicia a contagem

        do{ //via Do

          echo "$c1 ";
          $c1++;
        }while($c1<=10);

        $c2=10;
        do{ //contagem regressiva
          echo "$c2 ";
          $c2--;
        }while($c2>=1);
    ?>
</div>
</body>
</html>
 