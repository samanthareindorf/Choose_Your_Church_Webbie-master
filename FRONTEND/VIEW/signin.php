<?php
session_start();

 include('../../BACKEND/CONNECTIONS/database_connection.php');




 if($_SERVER['REQUEST_METHOD']=="POST")
 {
    // something was posted
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(!empty($email) &&!empty($password) && filter_var($email, FILTER_VALIDATE_EMAIL))
    {

         
         $query= "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
         $dbresult=mysqli_query($connection, $query);
        //  check if password matches that in database
        if($dbresult)
        {

            if($dbresult &&mysqli_num_rows($dbresult)>0)
            
            {


              foreach($dbresult as $data)
              {
                $user_id=$data['user_id'];
                $firstname=$data['fname'];
                $lastname=$data['lname'];
                $member=$data['fellowship_id'];


              }

              $_SESSION['member']="$member";
              $_SESSION['auth_user']=[


                'user_id'=>$user_id,
                 'fname'=>$firstname,
                 'lname'=>$lastname,

              ];

             

              if($_SESSION['member']==='111')
              {
                $_SESSION['message1']="Welcome to your dashboard!";
                $_SESSION['userLoggedIn']=$firstname;
                header("Location: ../VIEW/KCF/index.php");
                exit(0);

              }elseif($_SESSION['member']==='112')
              {
                $_SESSION['message1']="Welcome to your dashboard!";
                $_SESSION['userLoggedIn']=$firstname;
                header("Location: ../VIEW/TKU/index.php");
                exit(0);

              }elseif($_SESSION['member']==='113')
              {
                $_SESSION['message1']="Welcome to your dashboard!";
                $_SESSION['userLoggedIn']=$firstname;
                header("Location: ../VIEW/PENSA/index.php");
                exit(0);

              }elseif($_SESSION['member']==='114')
              {
                $_SESSION['message1']="Welcome to your dashboard!";
                $_SESSION['userLoggedIn']=$firstname;
                header("Location: ../VIEW/FIRST/index.php");
                exit(0);



              }else
                   {
                     echo "<h3 style='color:red'>You need to be a member to access this page!</h3>";
                      $_SESSION['message2']="You need to be a member to access this page!";

                    }
            } 
            else{
            
              echo "<h3 style='color:red'>You need to be a member to access this page!</h3>";
            
            }
            



        } 
        
       

    
    }
    else
    {
      $_SESSION['message2']="Hm, something is not right";
    }

  }
 
  


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>SIgn In</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- <link rel="stylesheet" href="../FORMS/joinForm.css"> -->
  <!-- <link rel="stylesheet" href=""> -->
</head>



<body>

<div class="container-fluid">
  <h2> Login Form</h2>
  <form action="" method="post">
    <div class="form-group">
 <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Your mail" name="email"><br><br>

<label for="password">Password:</label>
    <input class="form-control" id="password" type="password" name="password" placeholder="Enter password"><br><br>

    <input type="submit" class="btn btn-success" name="submit" value="Sign In"> <br><br>
    Don't have an account?
    <a href="signup.php">Sign Up</a>
    </div>
    </form><br><br>
    </div>
    