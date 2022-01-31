<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
<p>Aula 11 - Exercício 02 (parte 2)</p>
    
        
        <?php
           
           $i = 1;
            while ($i <= 5){
                $v ="num".$i; //Criando uma variável dinâmicamente
                $url = "v".$i; 
                $$v = isset($_GET[$url])? $_GET[$url]:0; //usando variável de variável
                //pegando dados da url
                $i+=1;
            }

            echo " $num1 $num2 $num3 $num4 $num5 "
          
            

        ?>

        


    

    
    
    
</div>
</body>
</html>
 