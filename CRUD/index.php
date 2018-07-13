<?php
include 'config.php';
include 'database.php';
?>

<?php
    $db= new database;
    $query= "SELECT * FROM user";
    $read = $db->select($query);
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <a class="btn btn-success" href="create.php">Create</a>
               
                <table class="table">
                    <thead>
                        <tr>
                            
                            <th>Name</th>
                            <th>Mail</th>
                            <th>Skill</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
<?php if($read) {
       while ($row= $read->fetch_assoc()){      

?>

                    <tbody>
                        <tr>
                            
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['mail']; ?></td>
                            <td><?php echo $row['skill']; ?></td>
                            <td><a class="btn btn-default" href="update.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                            
                           
                        </tr>
                    </tbody>
<?php } } ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>