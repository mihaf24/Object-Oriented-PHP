<?php
    class mobile{
       
        public static $staticVariable="static variable"; //this is a static variable which can be accessed by scope resolution.
        
        const A = "IMTIAZ AHMED";
        public $name= "fahim";
        
        
        public function __construct($a){
            $this->name=$a;
        }
        public function displayConstant(){
            echo 'the constant is '. mobile::A.'<br>';
        } 
        
        public static function staticFunction(){
            echo 'this is a static function';
            echo mobile::$staticVariable;
            echo 'br';
            //echo $this->name; // can't access this variable.
        }
        
        
    }
    
    
    
    mobile:: staticFunction(); //no need for any object to access the static function. 
    
    $fahim= new mobile('fahim'); 
    $fahim->displayConstant();

    
    

    
    
?>