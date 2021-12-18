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

      $d = isset($_GET["ds"])?$_GET["ds"]:0; //GET: pega o número do GET. Condição SE (Quando isso; ou isso; isso)
      

        switch ($d){ //switch case

          case 2:
          case 3:            
          case 4:         
          case 5:                       
          case 6:         

            echo " <span class='foco'> Dia de Aula </span>";
            break; //Causa uma parada após a execução.

            case 7:           
            case 8:               
            
              echo " <span class='foco'> Descanso </span>";
              break; //Causa uma parada após a execução.

              default:
                echo "Dia da semana inválido";

        }

          

            //class do span, ou qualquer outra tag, precisa estar entre aspas simples
            // pode-se usar qualquer tag configurada em css

      
    ?>

    <br><br><a href="javascript:history.go (-1)" class="botao"> Voltar</a> 
    <!-- o código javascript volta uma página do historico. è a mesma coisa de voltar do navegador -->
    <!-- Botão de voltar -->
</div>
</body>
</html>
 