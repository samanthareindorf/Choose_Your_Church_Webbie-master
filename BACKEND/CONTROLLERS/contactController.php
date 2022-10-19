<?php
session_start();
include('../CONNECTIONS/database_connection.php');
include('../../FRONTEND/VIEW/message.php');






if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $comments=$_POST['comments'];

    
    //for name
    if (preg_match("/^[a-zA-Z-' ]*$/",$name)&& filter_var($email, FILTER_VALIDATE_EMAIL) && (!empty($comments)))
  {
      

    $sqlQuery= "INSERT INTO contact (name, email, coments) VALUES ('$name','$email','$comments')";

    $runQuery=mysqli_query($connection,$sqlQuery);
      

    if($runQuery)
    {
      echo "<h4 style='color:green'>Invalid data entered</h4>";
        header("Location: ../../FRONTEND/HOME/index.php");
        
    }
    else
    {
      echo "<h4 style='color:red'>An error occurred</h4>";
        header("Location: ../../FRONTEND/HOME/index.php");

    }

        

  }
else
{ 
  echo "<h4 style='color:red'>Invalid data entered</h4>";
  header("Location: ../../FRONTEND/HOME/index.php");
 
}
}







?>