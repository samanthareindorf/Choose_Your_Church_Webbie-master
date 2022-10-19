<?php

session_start();
include('../message.php');
include('../../../BACKEND/CONNECTIONS/database_connection.php');

if(isset($_POST['submit']))
{

    $target_dir="tku_profiles/";
    $target_file=$target_dir.basename($_FILES["image"]["name"]);
    $image_file_type=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



    if(!empty($_FILES["image"]["name"]))
    {
        $errCheck=getimagesize($_FILES["image"]["tmp_name"]);
        if($errCheck==false)
        {
            // echo "File isn't an image";
            $_SESSION['message2']="File isn't an image";
            // array_push($erros, "File isn't an image");
        }
        elseif($_FILES["image"]["size"]>500000)
        {
           echo $_SESSION['message2']="File is too large. 5MB expected";
        }

        //extensions
        elseif($image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "gif" && $image_file_type != "jpeg" && $image_file_type != "jfif")
        {
             $_SESSION['message2']="Sorry, only JPG, PNG & GIF &JFIF files are allowed";
            
            

         }
         else
         {

            $uploaded=move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

            if($uploaded)
            {
                $user_id=$_SESSION['auth_user']['user_id'];

                $query="INSERT INTO user_profiles (user_id, profile_pic) VALUES ('$user_id','$target_file')  ";
                if(mysqli_query($connection, $query))
                {
                    $_SESSION['message1']="Uploaded and saved to database";
                }
                else
                {
                   echo  $_SESSION['message2']="Upload failed";
                }
                
               
            }
            else
            {
               echo $_SESSION['message2']="SQL ERROR";
                
            }

         }

        
}
}





?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <link rel="stylesheet" href="css/profileChange.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-md-4 formdiv">
                <form action="" method="post" enctype="multipart/form-data">
                    <h3 class="text-center">
                        Choose Your Profile
                    </h3>
                    <div class="form-group">
                        <label for="image">Profile Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div><br>
                    <div class="form-group">
                        <button name="submit" type="submit" class="btn btn-success btn-block">Upload</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
    <button onclick="goToIndex()" class="btn btn-primary btn-lg">Back</button>

    <script>
        function goToIndex() 
         {
            window.open('index.php');
        }
      
    </script>
</body>
</html>