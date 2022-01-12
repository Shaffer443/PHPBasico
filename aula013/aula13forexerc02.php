<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
<p>Exercício: 02</p>
    <p>Exibir a tabuada de um número escolhido pelo usuário de 1 a 10.</p>
<div>
    <form method="get" action="tabuadaexercicio.php">

        <select name="num" id="">
            <?php

                for($i=1;$i<=10;$i++){
                   
                  print "<option>$i</option>"; /* Cria opções no laço FOR da option*/

                }

            ?>
        </select>
        <input type="submit" value="Tabuada">
    </form>
</div>
</body>
</html>
 