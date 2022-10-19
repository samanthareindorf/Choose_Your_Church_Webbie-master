
<?php
session_start();
include('../CONNECTIONS/database_connection.php');
include('../../FRONTEND/VIEW/message.php');




if(isset($_POST['donate']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $paymentOption=$_POST['paymentOption'];
    $amount=$_POST['amount'];

    if(!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($amount||is_numeric($amount)))
    {
      

    $sqlQuery="INSERT INTO donation (name, email, paymentOption, amount) VALUES ('$name','$email','$paymentOption','$amount')";

    $runQuery=mysqli_query($connection,$sqlQuery);
      
    if($runQuery)
    {
        
        header("Location: ../../FRONTEND/HOME/donation.php");
        $_SESSION['message1']="You have successfully donated! God bless you";
    }
    else
    {
        $_SESSION['message2']="There was an issue donating!";
        header("Location: ../../FRONTEND/HOME/donation.php");
    }
    }
    else
    {
        $_SESSION['message2']="Invalid data entered!";
        
    }
}












?>