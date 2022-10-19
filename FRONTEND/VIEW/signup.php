<?php
session_start();

        include('../../BACKEND/CONNECTIONS/database_connection.php');
      
        include('message.php');
      
        
       if($_SERVER['REQUEST_METHOD']=="POST")
       {
           //something was posted
           $fname=$_POST['fname'];
           $lname=$_POST['lname'];
           $dob=$_POST['dob'];
           $email=$_POST['email'];
           $password=$_POST['password'];
           $confirmPassword=$_POST['confirmPassword'];
           $phone=$_POST['phone'];
           $fellowship=$_POST['fellowship'];
        

          
        


           //password checker
            $checker='/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/';

            
           //validation
           if(!empty($fname) &&!empty($lname) &&!empty($dob) &&!empty($email) &&! empty($password) &&! empty($confirmPassword)  &&!empty($phone) &&!empty($fellowship)&&!is_numeric($fname) && !is_numeric($lname) &&is_numeric($phone) && $password===$confirmPassword && filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z-' ]*$/",$fname) && preg_match("/^[a-zA-Z-' ]*$/",$lname) && strlen($password)>5 && !preg_match($checker,$password) )
           {
                

                $query= "INSERT INTO users (fname,lname,dob,email,password,phone_number, confirm_password,fellowship_id) values ('$fname', '$lname', '$dob','$email','$password','$phone','$confirmPassword', '$fellowship')";
                $added=mysqli_query($connection, $query);
                if($added)
                {
                $_SESSION["message1"]="You Have successfully signed up!";
                header("Location:signin.php");
                exit(0);
                
                }else

                {
                   $_SESSION['message2']="Sorry, you couldn't be added. 😥";
                   header("Location:signup.php");
                   exit(0);
                   
            
     
                }

              }
      
           else

           {
              $_SESSION['message2']="Please enter valid information and ensure all fields are filled 🧐";
              header("Location:signup.php");
              exit(0);
              
       

           }
          }
           
      //  }




?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="signup.css">
  <script src="../../BACKEND/JS/regex.js"></script>
</head>



<body>
<div class="container-fluid">
  <h2>Sign Up Form</h2>
 
  <form id="signForm" action="" method="post" enctype="multipart/form-data">
 
    <div class="form-group">
     

    <label for="fname">Firstname:</label>
    <input class="form-control" id="fname" type="text" name="fname" placeholder="Enter your firstname">
    <small></small>
    <br><br>

 <label for="lname">Lastname:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter your lastname" name="lname">
      <small></small>
      <br><br>


      <label for="dob">Date Of Birth:</label>
    <input class="form-control" id="dob" type="date" name="dob" >
    <small></small>
    <br><br>


      <label for="email">Email:</label>
    <input class="form-control" id="email" type="email" name="email" placeholder="Enter your email">
    <small></small>
    <br><br>

    
<label for="password">Password:</label>
    <input class="form-control" id="password" type="password" name="password" placeholder="Enter password">
    <small></small>
    <br><br>

    <label for="confirmPassword">Confirm password:</label>
    <input class="form-control" id="confirmPassword" type="password" name="confirmPassword" placeholder="Repeat the password">
    <small></small>
    <br><br>



      <label for="phone">Phone Number:</label>
    <input class="form-control" id="phone" type="tel" name="phone" placeholder="Must be number">
    <small></small>
    <br><br>


    <label for="fel">Fellowship:</label>
    <select name="fellowship" id="fel">
      <option value="111">KCF</option>
      <option value="112">TKU</option>
      <option value="113">PENSA</option>
      <option value="114">FIRST LOVE</option>
    </select> 
    <small></small>
    <br><br>

    <!-- <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Sign Up"> <br><br> -->
    <button type="submit" class="btn btn-primary btn-lg" name="submit">Sign Up</button><br><br>
    <button onclick="openHomePage()" class="btn btn-info">Back to Home</button>
 

    Already have an account?
    <a href="signin.php">Sign In</a>
    
    </div>
    </form><br><br>
    </div>
    <script>
        function openHomePage()
        {
            window.open('../HOME/index.php');
        }
    </script>
    




</body>
</html>