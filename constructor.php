<?php
    class mobile{
        public $name;
        public $price;
        public static $staticVariable="static variable"; //this is a static variable which can be accessed by scope resolution.
        
        const A = "IMTIAZ AHMED";
        
        public function __construct($a,$b){
            echo 'this is constructor';
            echo 'the price of '.$a. ' is '.$b.'<br>';
            $this->name=$a;
            $this->price= $b;
        }
        
        public function __destruct(){
            echo 'the destructor is called after the function ends. In project we can close the mysqli connection here after the work of db is done.<br>';
            
            unset($this->name);
            unset($this->price);
        }
        
        public function price(){
            echo 'this is function<br>';
             echo 'the price of '.$this->name. ' is '. $this->price.'<br>';
        } 
        
       
        
       
        
        
    }
    
    
    
    $fahim = new mobile("samsung","15000");
    $fahim->price();
    
    echo 'this is out of the function<br>';
     echo 'the price of '.$fahim->name. ' is '. $fahim->price.'<br>';
    
 

    
    

    
    
?>