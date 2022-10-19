<?php
//required files

session_start(); //to help get user logged in and session message
include('sidenavTKU.php');
require('../../../BACKEND/CONNECTIONS/database_connection.php'); //for session message





?>


<!--html code-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TKU  Extra Activity Page</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
     <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


            
<div class="card w-75" style="margin-top: -600px; margin-left:270px">
  <div class="card-header text-light bg-danger">
  <span><i class='fas fa-skating'></i>Extra Activities</span>
  </div>
  <div class="card-body">
      
     
      <?php 
      
                            //to select all curricula activities from TKU only
                            $query="SELECT extra_name, extra_meeting_days FROM tku_extra_curricula";

                            //check if query has been run
                           if($runQuery=mysqli_query($connection,$query)){

                            //if data found display results in a table
                            if(mysqli_num_rows($runQuery)>0)
                            {
                        
                                    echo "<table class='table'>";
                                    echo "<tr>";
                                    echo "<th>Beth Name</th>";
                                    echo "<th>Beth Meting Days</th>";
                                   
                                    


                                    echo "</tr>";



                                while($row=mysqli_fetch_array($runQuery)){
                                    echo "<tr>";
                                    

                                    echo "<td>".$row['extra_name']. "</td>";

                                    echo "<td>".$row['extra_meeting_days']. "</td>";

                                    






                                }
                                echo "</table>";

                                mysqli_free_result($runQuery);

                                   
                                }else{
                                    echo "No records found";
                                }
                                }
                            

                            
                            ?>

  </div>
  <div class="card-footer text-light bg-danger">
      <p>TKU is the ish</p>
  </div>
</div>



</body>
</html>