<?php
    trait java{
        public function add(){
            echo 'this is a function<br>';
        }
    } 

    trait java1{
        public function add1(){
            echo 'this is another function<br>';
        }
    } 

    class adder{
        use java;
        use java1;
    } 

    class adder2{
        use java;
    }

    $a= new adder;
    $a->add();
    $a->add1();
    
    $b= new adder2;
    $b->add();
    
?>