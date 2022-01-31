<?php


class Caneta{

    public $modelo; /* Declarando Atibuto Modelo: Get e Set de Modelo */
    private $ponta; /* Declarando Atibuto Ponta: Get e Set de ponta */
    private $tampada; // Tampar ou destampar a caneta
    private $cor; // Atributo cor

    //Criando um método contrutor (padrão de configuração automática de um objeto)
    // modo 1:
    /*public function __construct(){
        // também pode-se usar o ome da classe alvo, no caso Caneta. Ficando: Public Function Caneta(){}
        // Tudo que estiver aqui dentro será executado automáticamente.

        $this->cor = "Azul";
        $this->tampar();

        //$this, signifca objeto que chamou


    }*/

    //Modo 2 para Construção (contructor)

    public function Caneta($m, $c, $p){

        $this->modelo = $m;
        $this -> cor = $c;
        $this -> ponta = $p;
        $this->tampar();

    }

    public function tampar(){

        $this->tampada = true; // 1 é Verdadeiro e vazio é falso em PHP
        
        return "Tampada"; //Retorna no print como tampada
    }


    public function getCor(){

        return $this->cor;

    }


    public function getModelo(){

        return $this->modelo;

    }

    public function setModelo($m){

        $this->modelo = $m;

    }

    public function getPonta(){

        return $this->ponta;

    }

    public function setPonta($p){

        $this->ponta = $p;

    }


}