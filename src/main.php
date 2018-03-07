<?php 

spl_autoload_register(
    function($className){
        $filename = sprintf('%s/%s.php', __DIR__, str_replace('\\', '/',
            $className));
        
        echo ("filename = $filename\n");
        
        if (is_file($filename)) {
            require_once $filename;
        }
    }
    );

use features\Metadata;
use features\Normalizer;
use features\Serialize;


class Car {
    private $brand;
    private $model;
    private $powerHP;
    private $color;
    private $type;
    
    public function __construct ($brand, $model, $power, $color, $type){
        $this->brand = $brand;
        $this->model = $model;
        $this->powerHP = $power;
        $this->color = $color;
        $this->type = $type;
    }
    
    public function getBrand(){
        return $this->brand;
    }
    
    public function getModel(){
        return $this->model;
    }
    
    public function getPower(){
        return $this->powerHP;
    }
    
    public function getColor(){
        return $this->color;
    }
    
    public function getType(){
        return $this->type;
    }
    
    
    
}

$myCar = new Car ('ISUZU', 'DMAX', 167, 'black', 'PickUP' );

$myMetadata = new Metadata (['getBrand'=>'brand',
                            'getModel' => 'model',
                            'getPower' => 'power',
                            'getColor' => 'color',
                            'getType' =>'type']);


$myNormalizer = new Normalizer;

$mySerializer = new Serialize;


$outputType = 'PHPNative';

echo ($mySerializer->serialize($myNormalizer->normalize($myCar, $myMetadata) , $outputType))




?>