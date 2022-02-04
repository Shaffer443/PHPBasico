<?php

class Conta{

    //Atributos:
    
    public $numeroconta;
    protected $tipo;
    private $titular;
    private $saldo;
    private $status;


    //Metodos;

    public function abrirConta($t){

        $this -> setTipo($t);
        $this -> setstatus(true);

        if ($t == "cc"){

           $this -> setSaldo (50.00); // ou $this -> $saldo = 50.00;

        }elseif ($t == "cp"){
            
            $this -> setSaldo (150.00);
        }

    }

    public function fecharConta(){

        if($this -> saldo >0){

            echo "<p>Conta ainda tem saldo. Precisa Retirar antes de Fechar a Conta.</p>";
        } elseif ($this -> saldo < 0){

            echo "<p>Conta com saldo negativo (com débito). Não pode ser fechada</p>";
        } else{

            $this -> setstatus(false);
        }
        
    }

    public function depositar($v){

        if ($this -> getstatus() == true){

            $this -> setsaldo($this->getsaldo()+$v);
            // ou $this -> saldo = $this -> saldo + $v;
            echo "<p>Despósitado R$$v efetuado com sucesso, na conta de ".$this->gettitular()."</p>"; //concatenando

        } else{

            echo "<p> Conta não encontrada. Verifique a existência da conta. Impossivel depositar.</p>";

        }
        
    }

    public function sacar($v){

        if($this -> getstatus()){

            if($this -> saldo >= $v){

                $this -> saldo = $this -> saldo - $v;
                // ou $this -> setsaldo( $this -> getsaldo() - $v);

                echo "Saque de R$$v efetuado com sucesso, na conta de ".$this->gettitular(); //concatenando
                echo "<br>";
            } else{

                echo "<p> Saldo Insificiente";

            }    


        } else{

            echo "<p> Impossível Sacar de uam conta fechada. </p>";

        }
        

    }
        
    

    public function pagarmensalidade(){


        if ($this -> tipo == "cc"){

            $tarifa = 12.00;

        }elseif ($this -> tipo == "cp"){
            
            $tarifa = 20.00;
        }
    

        if($this -> getstatus() == True){
            if($this -> getsaldo() > $tarifa){
                
                $this -> setsaldo($this-> getsaldo() - $tarifa);
                echo "<p>Mensalidade de R$$tarifa efetuado com sucesso, na conta de ".$this->gettitular()."</p>"; //concatenando

            }else{
                
                echo "<p>Saldo Insuficiente para débito da mensalidde.</p>";
            }

        }else{

            echo "<p>Pagamento Não Efetuado</p>";
        }
        
    }


    //metodos especiais: 

    // get - geralmente é publico e não precisa de parâmetros.
    // set - geralmente é publico e precisa de parâmetros.

    public function __construct(){
        // também pode-se usar o nome da classe alvo, no caso Caneta. Ficando: Public Function Caneta(){}
        // Tudo que estiver aqui dentro será executado automáticamente.

        $this->status = False;
        $this->saldo = 0.00;

        //$this, signifca objeto que chamou

        // não é rocomendado criar echo em métodos

        echo "<p> Conta criada com sucesso ! <p>";


    }


    public function getnumeroconta(){

        return $this->numeroconta;
    
    }

    public function setnumeroconta($n){

        $this -> numeroconta = $n;
    
    }
    
    public function gettipo(){

        return $this -> tipo;
    
    }

    public function settipo($t){

        $this->tipo = $t;

    
    }

    public function gettitular(){

        return $this->titular;

    }

    public function settitular($nome){

        $this -> titular = $nome;
        
    }

    public function getsaldo(){

        return $this->saldo;

        
    }

    public function setsaldo($saldo){

        $this -> saldo = $saldo;
        
    }

    public function getstatus(){

        
        return $this->status;
        
    }

    public function setstatus($status){

        $this-> status = $status;
        
    }




}



?>