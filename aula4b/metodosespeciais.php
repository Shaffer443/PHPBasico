<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04b - POO PHP</title>
</head>
<body>

    <?php   

        require_once "Caneta.php";

        //$c1= new Caneta(); /* Criando um novo objeto, usando o modo 1 de constructor */
        
        $c1=new Caneta("Bic", "Verde", 0.7); /* criando um obejeto, com os parâmetrso do modo 2 de contrução */
       // $c1-> setModelo("BIC"); /* criando um novo modelo de caneta. lembrando que é uma string o parâmetro */
        //$c1->modelo="Rafa"; /* outro modo de se cria métodos */
        
        //$c1-> setPonta(0.5); /* criando um novo modelo de caneta. lembradno que é u valor float */
        /* A ponta não pode ser alterada através de: $c1->ponta=1.4, devido a ela ser privada. Gera um erro. */
        
        //print "Eu tenho uma {$c1->getModelo()} de ponta {$c1->getponta()}.";
        /* Precisa {interpolar} os modelos para ser impresso */

        print "Criado uma Caneta de {$c1->getcor()} e {$c1->tampar()}.";


        var_dump($c1);

    ?>
    
</body>
</html>