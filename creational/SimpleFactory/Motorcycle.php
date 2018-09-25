<?php

class Motorcycle
{
    
    private $motorcycle_make;
    
    private $motorcycle_model;    
    
    public function __construct($make, $model)
    {
        $this->motorcycle_make  = $make;
        $this->motorcycle_model = $model;        
    }
    
    public function getMakeAndModel()
    {
        return $this->motorcycle_make. ''. $this->motorcycle_model;
    } 
    
}