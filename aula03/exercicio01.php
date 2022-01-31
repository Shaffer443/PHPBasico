<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of exercicio01
 *
 * @author Rafael Gouveia
 */
class Computador{
    //criar classes para um objeto do meu dia a dia. Escolhi o pc.
    
    var $tipo; //Pc ou notebook
    var $sistema; // Windows ou Linus
    var $status; //ligado ou desligado
    
    function uso(){
        //Premissa de montar conjuntos de uso para o pc.
        
        if($this->status == true){
            
            echo "<p> Pc ou Notebook: <b>Ligados</b></p>";
        
            
        } else{
        
            echo "<p> Pc ou Notebook: <b>Desligado</b></p>";
        }
        
    }
    
    function modelo(){
        
        echo "Qual o Modelo: 1 - Pc | 2 -Notebook";
        //escolha = INPUT_GET[];
        if($this->tipo == 1){
            echo "Você está usando um PC";
        }else{
            echo "Você está usando um Notebook";
        }
    }
    
}
