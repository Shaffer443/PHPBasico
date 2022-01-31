 <?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Caneta
 *
 * @author Rafael Gouveia
 */
class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar(){
        if($this->tampada){
            echo "<p> Erro! Não possa rabiscar</p>";
        
    }else{
        echo "<p> Possa rabiscar...</p>";
        }
    }
    
    private function tampar(){
        
         // se chamar tampar, ele tampa a caneta.
         
        $this-> tampada = true;
        
    }
    
    private function destampar(){
        
         // se chamar destampar, ele abre a caneta.
         
         $this-> tampada = false;
        
        
    }
    
    
}
