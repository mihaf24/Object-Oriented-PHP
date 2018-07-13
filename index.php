<?php
    include 'function.php';
    if(isset($_POST['submit'])){
        $num1= $_POST['num1'];
        $num2= $_POST['num2'];
        
        $cal= new calculation;
        $cal->add($num1,$num2);
    } 

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>oophp</title>
</head>
<body>
    <form action="" method="post">
        
        <input type="number" name="num1">
        <input type="number" name="num2">
        <input type="submit" name="submit">
    </form>
</body>
</html>