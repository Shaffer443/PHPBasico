<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
<p>Aula 11 - Exercício 03</p>
<p>Criar um contador personalizavél entre Inical e Final</p>

  
  <?php
           
           
    
    $ini = $_GET["ini"]; //puxando valores da url da página anterior
    $fin = $_GET["fin"]; 
    $cont = $_GET["inc"];
    
    //Não consigo colocar '<=' e '>=', pois ele está adicionando número maiores que o solicitado
    
    while ($ini < $fin){
       
        echo $ini." "; //inicial + a soma das contagens, respeitando o incremento
      
        $ini+=$cont; //valor inicial, somando as variações do valord a contagem
         

      }
   
     
      while ($ini > $fin){

        echo $ini." "; 

        $ini-=$cont;
            
        }
   


  ?>
    <a href="aula011.3.php"><br><br>Voltar</a>
</div>
</body>
</html>
 