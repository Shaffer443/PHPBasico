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
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabiscar(){
        if($this->tampada){
            echo "<p> Erro! Não possa rabiscar</p>";
        
    }else{
        echo "<p> Possa rabiscar...</p>";
        }
    }
    
     function tampar(){
        
         // se chamar tampar, ele tampa a caneta.
         
        $this-> tampada = true;
        
    }
    
     function destampar(){
        
         // se chamar destampar, ele abre a caneta.
         
         $this-> tampada = false;
        
        
    }
    
    
}
