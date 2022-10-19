<?php
session_start();
require('../../../BACKEND/CONNECTIONS/database_connection.php');
include('../message.php');


    if(isset($_POST['delete_btn']))
    {   
        $id=$_POST['delete_id'];
        $query="DELETE FROM first_user_testimony WHERE testimony_id='$id'";
        $runQuery=mysqli_query($connection,$query);

        if($runQuery)
        {
            $_SESSION['message1']="You have successfully deleted your testimony";

            header("Location: FIRSTindividual.php");

        }
        else
        {
            $_SESSION['message2']="There was an error deleting your testimony";

            header("Location: FIRSTindividual.php");
        }
    }

    ?>