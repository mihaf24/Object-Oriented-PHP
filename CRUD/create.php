<?php
include 'config.php';
include 'database.php';
?>
   

<?php
    
    $db= new database;
    if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
        $skill= $_POST['skill'];
        
        if($name== '' || $email=='' || $skill==''){
            $error='field must not be blank';
        }
        else{
            $query="INSERT INTO `user`(`id`, `name`, `mail`, `skill`) VALUES ('','$name','$email','$skill')";
            $create= $db->insert($query);
            
            $db->insert($query);
        }
    } 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
        <div class="row">
            
                <form class="form-horizontal" action="create.php" method="post">
                  
                   <div class="form-group">
                       <label class="control-label col-sm-3" for="name">Name</label>
                       <div class="col-sm-9">
                           <input class="form-control" type="text" name="name">
                       </div>
                   </div>
                   
                   <div class="form-group">
                       <label class="control-label col-sm-3" for="email">Email</label>
                       <div class="col-sm-9">
                           <input class="form-control" type="email" name="email">
                       </div>
                   </div>
                   
                   <div class="form-group">
                       <label class="control-label col-sm-3" for="skill">Skill</label>
                       <div class="col-sm-9">
                           <input class="form-control" type="text" name="skill">
                       </div>
                   </div> 
                   
                   <div class="form-group">
                       <div class="col-md-3"></div>
                       <div class="col-sm-9">
                           <button class="form-control btn btn-success" type="submit" name="submit">Submit</button>
                       </div>
                   </div> 
                   
                   <div class="form-group">
                       <div class="col-md-3"></div>
                       <div class="col-sm-9">
                           <button class="form-control btn btn-default" type="reset" value="cancel">Cancel</button>
                       </div>
                   </div> 
                   
                    
                   
                    
                </form>
                <a class="btn btn-default" href="index.php">Go back</a>
            
        </div>
    </div>
</body>
</html>