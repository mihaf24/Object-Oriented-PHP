<?php
    class mobile{
        public $name;
        public $price;
        
        public function __construct($a,$b) {
            $this->name= $a;
            $this->price= $b;
            $this->price1= "c";
           
        } 
        
        public function display(){
            echo $this->name.'<br>';    
            echo $this->price.'<br>';    
            echo $this->price1.'<br>';    
        }
        
        
    }  

    class xiaomi extends mobile{
        public $level;
        public function display(){
            echo $this->name.'<br>';    
            echo $this->price.'<br>';    
            echo $this->lebel.'<br>';    
        }
        
    } 


    //if we want to stop a class from exetending then we need to use final keyword. for example: 
    //final class mobile{}
    //by using this xiaomi can't extend mobile class. 
    //same goes for the function. if we use 
    //public final function display(){}
    //then we can't override it in the xiaomi class. 

    $new= new mobile('samsung','15000');
    
    $new->display();

    $new1= new xiaomi('xiaomi','20000');
    $new1->lebel='1';
    $new1->display();

?>