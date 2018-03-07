<?php
namespace features;

class Metadata{
    
    public $configuration;
    private $correspondanceArray=[];
    private $methodName;
    private $resultName;
    
    
    public function __construct ($mappingArray){
       $this->correspondanceArray = $mappingArray;
    }
    
    public function getAllCorrespondance(){
        return $this->mappingArray;
    }
}




