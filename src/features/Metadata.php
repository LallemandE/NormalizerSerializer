<?php
namespace features;

class Metadata{
    
    private $correspondanceArray=[];
    
    public function __construct ($mappingArray){
       $this->correspondanceArray = $mappingArray;
    }
    
    public function getConfiguration(){
        return $this->mappingArray;
    }
}




