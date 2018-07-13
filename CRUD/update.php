<?php
include 'config.php';
include 'database.php';
?>
   

<?php
    $user_id= $_GET['id'];
    echo $user_id;
    $db= new database;
    
     $query= "SELECT * FROM user WHERE id='$user_id'";
    $read = $db->select($query)->fetch_assoc();
    
    
    if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
        $skill= $_POST['skill'];
        
        if($name== '' || $email=='' || $skill==''){
            $error='field must not be blank';
        }
        else{
            $query="UPDATE `user` SET `name`='$name',`mail`='$email',`skill`='$skill' WHERE id='$user_id'";
            $create= $db->insert($query);
            echo $query;
            
            $db->update($query);
        }
    } 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
        <div class="row">
            
                <form class="form-horizontal" action="update.php?id=<?php echo $user_id; ?>" method="post">
                  
                   <div class="form-group">
                       <label class="control-label col-sm-3" for="name">Name</label>
                       <div class="col-sm-9">
                           <input class="form-control" type="text" name="name" value="<?php echo $read['name']; ?>">
                       </div>
                   </div>
                   
                   <div class="form-group">
                       <label class="control-label col-sm-3" for="email">Email</label>
                       <div class="col-sm-9">
                           <input class="form-control" type="email" name="email" value="<?php echo $read['mail']; ?>">
                       </div>
                   </div>
                   
                   <div class="form-group">
                       <label class="control-label col-sm-3" for="skill">Skill</label>
                       <div class="col-sm-9">
                           <input class="form-control" type="text" name="skill" value="<?php echo $read['skill']; ?>">
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