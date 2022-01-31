
    <?php

      function funcaoprintf(){
        /*defirença entre eo ECHO e PRINTF, é que no PRINTF, já se pode formatar na hora de imprimir */
          $produto = "leite";
          $preco = 4.5;
          echo"<h3>Função PRINTF:</h3><br>";
          printf("O preço do %s está por R$ %.2f.", $produto, $preco);
          /* echo "O preço do $produto está por R$ $preco.". number_format($preco,2);*/
          echo"<br>";
        }


      function funcaoprint_r(){
        /* Mostra detahes de uma variável, princpalmente se for um vetor.*/ 

        $vetor[0] = 5;
        $vetor[1] = 20;
        $vetor[2] = 10;

        echo"<h3>Função e formas de chamar a função PRINT_R:</h3><br>";

        print_r($vetor);
        echo"<br>";
        var_dump($vetor);
        echo"<br>";
        var_export($vetor);
        echo"<br>";

        /* Outro modelo para se criar uma array(vetor)*/
        
        $vetor2 = array (2,3,5,18,20,59);
        print_r($vetor2);

        echo"<br>";
      }

      function funcaowordwrap(){

        echo "<h3>Função WORDWRAP:</h3><br>";
        /* Significa quebra de linhas. Quebra as linhas dentro do seu código */

        $texto = "Estamos estudando a string wordwrap";
        $quebra = wordwrap($texto, 5, "<br>\n", false);
        echo $quebra;
        
        /* wordwrap(variavel de texto, numero de caracteres para quebrar, <br> quebra de linhas visual | \n quebra de linhas tb no código), valor lógico */
        /* valor lógico:
            false = se estiver até 5 caracteres, ele quebra. casa uma mesma palavra seja maior q 5 caracetres ele respeita a palavra e não quebra.
            true = independente se vai fazer sentido ou não, contou 5 carateres ele quebra.
            */

            echo"<br>";
      }

      function funcaostrlen(){

        echo "<h3>Função STRLEN:</h3><br>";
        /* Conta o número de letras, incluindo os espaço e pontuações. conta os caracteres gerais da string. */ 
          $txt = "Rafael Jose Gouveia de Melo";
          $nletras = strlen($txt);

          echo "Na string: $txt , tem $nletras letras;";

          echo"<br>";
      }

      function funcaotrim(){

        echo"<h3>função TRIM:</h3><br>";        

        /* Muito útil, principalmente em dados vindo de formulários.
        Elimina excesso de espaços no início e no final de uma string.
        ltrim - corta os execessos apenas do começo da string. Da esquerda.
        rtrim - corta os execessos apena do final. Da direita*/ 


        $nome = "     Cortando espaços em execessos de uma string    ";
        $tamanhonome = strlen($nome);
        echo "Tamanho da string de: $nome ,é $tamanhonome <br><br>";
        $tamanhonometrim = trim(strlen($nome));
        echo "Tamanho da string de: $nome, é $tamanhonometrim , usando a função TRIM para cortar os execessos. <br>";

        echo"<br>";

      }

      function funcaostr_word_count(){

        echo"<h3>função STR_WORD_COUNT:</h3><br>";   

        /* Informa a quantidade de palavras em uma string, e não so caracateres como em strlen. */

        $texto = "Estamos estudando a contagem de palavras em uma string (texto).";
        $contarpalavras = str_word_count($texto,0);
        echo "O número de palavras na frase: $texto, é $contarpalavras palavras. <br><br>";

        $textovetor = str_word_count($texto,1);
        echo "Cria vetores para cada uma das palavras no texto: <br><br>";
        print_r($textovetor);

        echo"<br><br>";

        echo "Cria vetores para cada uma das palavras no texto. Porém, mantendo suas posições, e o vetor de onde se inicia no texto: <br><br> "; 
        $textovetor2 = str_word_count($texto,2);
        print_r($textovetor2);
        


        /* 0 - Conta as palavras
          1 - Cria um array com as palavras e sua quantidade
          2 - Também cria um array, porém, informando a posição em que se inicia as palavras mantendo o seu poscionamento do texto.
        */

        echo"<br>";
      }

      function funcaoexplode(){
        echo"<h3>função EXPLODE:</h3><br>";
        
        /* Similar a função STR_WORD_COUT, porém, posso declara um variável como ""(Espaço), (. - ponto), (, - virgula).
        Para que seja o parâmetro de sua contagem de palavrasd entro de uma string */

        echo "Espaço como parâmetro de criação de array. <br><br> "; 
        $frase = "Estamos estudando a contagem de palavras em uma string (texto).";
        $vetor = explode(" ",$frase); /* modelo: parâmetro para contagem, a variável */
        print_r($vetor);

        echo"<br><br>";
        
        echo "' , '(vírgula) como parâmetro de criação de array.<br><br> " ;
        $frase2 = "O ignorante afirma, o sábio duvida, o sensato reflete. - Aristóteles";
        $vetor2 = explode(',',$frase2);
        print_r($vetor2);

        echo"<br>";
      }

      function funcaostr_split(){
        
        echo"<h3>função STR_SPLIT:</h3><br>";

        /* Similar ao str_word_count e explode, porém, ao invés de criar vetores com as palavras,
        ele cria vetores com cada letra da string */
        
        $nome = "rafael";
        echo "Cria um vetor com cada letra da string: $nome. <br> ";
        $vetorletra = Str_split($nome);
        print_r($vetorletra);

        
        echo"<br>";

      }

      function funcaoimplode(){

        echo"<h3>função IMPLODE:</h3><br>";

        /* Forma-se frases  através de vetores( o inverso do explode).
        Você pode configurar as divisões das palavras sendo " " (espaços), # (cerquilhas), ','(virgulas), outros... */
        
        $v[0] = "Rafael";
        $v[1] = "Gouveia";
        $texto = implode(" # ", $v);
        $texto2 = implode(" ", $v);
        echo "Usando # como separador. <br>";
        echo $texto;

        echo "<br><br>";

        echo "Usando ' ' (Espaço) como separador. <br>";
        echo $texto2;

        echo"<br>";

      }

      function funcaochr(){

        echo"<h3>função CHR:</h3><br>";

        /* Informando um códgigo ASCII, ele informa qual o caracter siginfica em seu teclado. */
        echo "Informa um código e retorna o caractere deste código (82) no teclado, por exemplo, é:   ";
        $letra = chr(82);
        print ($letra);

        echo"<br>";
      }

      function funcaoord(){

        echo"<h3>função ORD:</h3><br>";

        /* Informando a letra, ele responde com o códgigo ASCII.
        O inverso do CHR. */

        echo "Informando a letra ' a ', retorna o seu código ASCII um código e retorna o caractere deste código (82) no teclado, por exemplo, é:   ";
        $codigo = ord("a");
        print ($codigo);

        echo"<br>";
      }
        
        
    ?>

 