<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of activos
 *
 * @author bayardo
 */
class activos {
    private $bien;
    private $valor;
    private $vida;
    
    function __construct($bien, $valor, $vida) {
        $this->bien = $bien;
        $this->valor = $valor;
        $this->vida = $vida;
    }
     function  getSuma1(){
        return $this->valor;
        
          
    }

    
    function getBien() {
        return $this->bien;
    }

    function getValor() {
        return $this->valor;
    }

    function getVida() {
        return $this->vida;
    }

    function setBien($bien) {
        $this->bien = $bien;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setVida($vida) {
        $this->vida = $vida;
    }


}
