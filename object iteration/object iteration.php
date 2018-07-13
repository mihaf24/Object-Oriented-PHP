<?php
    class person{
        public $name="fahim";
        public $age= "20";
        
        private $mail= "iafbd4@gmail.com";
        protected $password= "123456";
        
        function iterator(){
            foreach($this as $key1 => $value1){
                echo "$key1=>$value1";
                echo '<br>';
            }
        }
    }    
    
?>