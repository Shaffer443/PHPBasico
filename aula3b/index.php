<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 03b: Configurando Visibilidade de atributos e Métodos </title>
    </head>
    <body>
        <p>Configurando etre Publico( + , public), Privado( - , private) e Protegido( # , protected)</p>
        <?php
            require_once 'Caneta.php'; //Faz com que a classe caneta seja carregada dentro deste arquivo.
        
            $c1 = new Caneta; // Novo Objeto criado.
            $c1->modelo = "BIC Cristal";
            $c1->cor = "Azul"; //Atributos
            //$c1->ponta = 0.5; // atributo privado
            //$c1->tampada = false; //true = Sim, está tampada, logo erro.
                                // false = Não, está aberta, posso rabiscar.
            /*$c1->tampar(); /*$c1 vai para o lugar de $this na funcação tampar.
                            se a função tampar informa que $this é true. 
                           isso quer dizer que $c1, na função rabiscar será true */ 
             
            
            
            var_dump($c1); // Mostra os atributos e valores
            print_r($c1);
            $c1->rabiscar(); //chama um Método(função), ele stá com publico
            
            echo "<br>";
            //criando um novo Objeto:
            
            $c2 = new Caneta;
            $c2 ->cor="Verde";
            //$c2 ->carga = 50;
            //$c2 ->destampar();
            
            var_dump($c2);
            print_r($c2);
            
            $c2->rabiscar();
            
        ?>
    </body>
</html>
