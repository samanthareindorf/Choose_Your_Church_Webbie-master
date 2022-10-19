<?php
session_start();
require('../../../BACKEND/CONNECTIONS/database_connection.php');
include('../message.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Testimony Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>

<?php

if(isset($_POST['editbtn']))

{   $id=$_POST['edit_id'];
    $testimony=$_POST['edit_testimony_statement'];
    $testimonyDate=$_POST['edit_testimony_date'];
   

    $query="UPDATE kcf_user_testimony SET testimony_statement='$testimony', testimony_date='$testimonyDate' WHERE testimony_id='$id'" ;

    $runQuery=mysqli_query($connection,$query);
    
    if($runQuery)
    {
        $_SESSION['message1']="Successful update!";
        header("Location: insertTestimony.php");
    }else
    {
        $_SESSION['message2']="Unsuccessful, something went wrong!";

        header("Location: insertTestimony.php");
    }
    

   
           
    }


?>


</body>
</html>
