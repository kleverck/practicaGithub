<?php

class Carrito {
    
    
    
    function getSuma($activoss){
        $suma=0;
     
        foreach ($activoss as $activos)  {
        $suma+=$activos->getSuma1();
        
      
        }
       
        return $suma; 
    }
    
   
    
    
    
    function getIva($activoss){
        $iva=$this->getSuma($activoss)*0.12;
             
        return $iva; 
    }
    
    
    
    function getTotal($activoss){
     
        $total=$this->getSuma($activoss)+$this->getIva($activoss);
        return $total;
        
    }
    
}
