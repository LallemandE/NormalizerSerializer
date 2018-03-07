<?php 

namespace features;

class Serialize{
    

    public function Serialize($normalizedArray, $outputFormat){
        if($outputFormat == "PHPNative"){
            return serialize($normalizedArray);
        }elseif($outputFormat == "JSON_FORMAT"){
            return json_encode($normalizedArray);
        }else{
            throw new Exception("wrong/undefined outputFormat");
         }
     }
}