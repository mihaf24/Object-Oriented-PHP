<?php
   /* spl_autoload_register(function($class_name){
        include "classes/".$class_name.".php";
    }); */ //one of the way

    function __autoload($class_name){
        include "classes/".$class_name.".php";
    } //this is another way to autoload a method. 

$c= new c;
$php= new php;
$java= new java;
?>