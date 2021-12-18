<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>

  <style>

    a#echo1_1 {

        color: blue;
        font-weight: bold; /* deixa o texto em negrito */
        font-size: 14pt ;

    }

      a#echo1_2 {

        color: blue;
        font-weight: bold; /* deixa o texto em negrito */
        font-size: 14pt ;

      }
     
         a#echo1_3 {

          color: red;
          font-weight: bold; /* deixa o texto em negrito */
          font-size: 14pt ;

        }


           a#echo2 {
             
             font-weight: bold; /* deixa o texto em negrito */
             font-size: 14pt ; /* tamanho da fonte em pt é melhor para textos e px para elementos fixos independentemente do tamanho da tela*/
           }

  </style>
</head>
<body>
<div id="respostas">
    <?php

      /* Receber as notas no HTML, informar média e Situação*/
      

      $nota1 = isset($_GET["nota1"])?$_GET["nota1"]: 0.0;
      $nota2 = isset($_GET["nota2"])?$_GET["nota2"]: 0.0;
        

        $media = ($nota1 + $nota2) / 2;

      echo " Primeira Nota = <a id='echo1_1'> $nota1 <a>. Segunda nota = <a id='echo1_2'> $nota2 <a>. Média Geral = <a id='echo1_3'> $media <a><br><br>";

      if( $media < 5.0){

        $resultado ="Reprovado";

      } else{

        
        if( $media >= 5.0 && $media < 7.0){
          
          $resultado ="Recuperação";


        }else{

          $resultado =  "Aprovado" ;

        }


      }

      echo " Situação do Aluno:<a id='echo2'> $resultado <a>";

      /* Adicionando códigos em CSS com PHP */
      /*Detalhes ID do <p> com '' imples, dentro das aspas duplas "" do echo*/
      
      


    ?>
</div>
</body>
</html>
 