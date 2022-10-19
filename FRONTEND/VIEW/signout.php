<?php
session_start();



if (isset($_SESSION['auth_user']['user_id'])) {

    # code...
    unset($_SESSION['auth_user']['user_id']);
    $_SESSION['message1']="Successfully Logged out!";
}


header("Location: ../HOME/index.php");
die;

?>



