<?php 

namespace features;


// Object Normalizer
class Normalizer
{
//public function Normalize => array with resultName as keys and result of methods on the object as value
    public function normalize($InputObject, $metadata)
    {
        
 // get the configuration of the object       
        $config = $metadata->getConfiguration();
// the intermediary object, neeeded to store the function results values        
        $intermediaryObject = [];
        
// foreach line into the array
        foreach ($config as $methodName =>$values){
            $other = $InputObject->$methodName(); 
            $intermediaryObject[$values] = $other;
        }
        
        
        return $intermediaryObject;
    }
}


 
 
 

     
     
 
 
 
 


?>