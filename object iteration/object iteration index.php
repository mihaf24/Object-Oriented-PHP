<?php
    include 'object iteration.php';
    $person= new person;
    echo 'all the variable can be accessed cz the function is within the class<br>';
    $person->iterator();
    
    echo 'outside of the class. that is why only the public variable is accessed<br>';
    foreach($person as $key => $value){
                echo "$key=>$value";
                echo '<br>';
    }
?>