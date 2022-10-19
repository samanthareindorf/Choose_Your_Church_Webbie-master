<?php
session_start();
require('../../../BACKEND/CONNECTIONS/database_connection.php');
include('sidenavTKU.php');





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TKU Birthday Page</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
     <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    




<div class="card w-75" style="margin-top: -720px; margin-left:270px">
  <div class="card-header text-light bg-success">
  <span><i class="fa fa-birthday-cake"></i>TKU Birthday Table</span>
  </div>
  <div class="card-body">
     
      <?php 
                            $query="SELECT fname, lname,dobmonth, dob FROM members WHERE fellowship_id=112";

                           if($runQuery=mysqli_query($connection,$query)){

                            if(mysqli_num_rows($runQuery)>0)
                            {
                        
                                    echo "<table class='table'>";
                                    echo "<tr>";
                                    echo "<th>Firstname</th>";
                                    echo "<th>Lastname</th>";
                                    echo "<th>Birth Month</th>";
                                    echo "<th>Birthdate</th>";
                                    echo "</tr>";



                                while($row=mysqli_fetch_array($runQuery)){
                                    echo "<tr>";
                                    echo "<td><i class='fas fa-user-circle'></i>".$row['fname']. "</td>";

                                    echo "<td>".$row['lname']. "</td>";

                                    echo "<td>".$row['dobmonth']. "</td>";

                                    echo "<td>" .$row['dob'].  "</td>";



                                }
                                echo "</table>";

                                mysqli_free_result($runQuery);

                                   
                                }else{
                                    echo "No records found";
                                }
                                }
                            

                            
                            ?>

  </div>
  <div class="card-footer text-light bg-success">
      <p>Let your BBC be the BBC of the century!</p>
  </div>
</div>
</body>
</html>