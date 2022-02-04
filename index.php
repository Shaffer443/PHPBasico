<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aulas Práticas Banco: Aula 5a e 5b</title>
</head>
<body>

    <p> <h1>Criando personagens para usar a calsse 'Conta'. Seus métodos, parâmetros e atributos: </h1></p><br>
    <p> <h3> Histórico: </h3>
    <?php

        //set - pode-se passar parâemtros e atributos.

        require_once 'metodosbank.php';

        $cliente1 = new Conta();
        

        $cliente1->abrirConta("cc"); //CC - Conta corrente | cp - conta poupança
        $cliente1->settitular("Rafael"); //nome do titualar passado.
        $cliente1->setnumeroconta(01);
        $cliente1->depositar(300); 
        $cliente1-> pagarmensalidade();   
        //$cliente1->sacar(900);
        $cliente1-> fecharConta();

        echo "<br><br>";

        $cliente2 = new Conta();

        $cliente2->abrirConta("cp");
        $cliente2->settitular("Pollyanna");
        $cliente2->setnumeroconta(02);
        $cliente2->depositar(500);
        $cliente2->sacar(50);
        $cliente2->pagarmensalidade();
        $cliente2-> fecharConta();

        echo "<br><br>";

        var_dump($cliente1, $cliente2); //pode ser print_r

    ?>
    
</body>
</html>