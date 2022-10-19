<?php
session_start();
require('../../../BACKEND/CONNECTIONS/database_connection.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Testimony Form</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>

<?php

if(isset($_POST['edit_btn']))

{   $id=$_POST['edit_id'];

    
    $query="SELECT * from kcf_user_testimony WHERE testimony_id='$id'" ;
  
    

    $runQuery=mysqli_query($connection,$query);

    foreach($runQuery as $row)
    {
        ?>
          <form action="codeForEdit.php" method="POST" style=" width:1100px; margin-top:20px; margin-left:20px">
          <input type="hidden" name="edit_id" value="<?php echo $row['testimony_id'] ?>">
            <div class="form-group">
                <label>Edit Testimony</label>
                <input type="textarea" class="form-control" name="edit_testimony_statement" value="<?php echo $row['testimony_statement'] ?>">
                
            </div>
            <div class="form-group">
                <label> Edit Date</label>
                <input type="date" name="edit_testimony_date" value="<?php echo $row['testimony_date'] ?>" class="form-control">
            </div><br>
            
            <button type="submit" name="editbtn" class="btn btn-info btn-lg">Edit</button>
            <a href="insertTestimony.php" class="btn btn-danger btn-lg">Cancel</a>
            

            </form><br>

            <?php
    }

}

?>




    
</body>
</html>

