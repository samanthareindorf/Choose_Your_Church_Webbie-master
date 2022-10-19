<?php
session_start();
include('sidenavFIRST.php');
include('../../../BACKEND/CONNECTIONS/database_connection.php');





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIRST LOVE EXTRA CURRICULA PAGE</title>
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
  <span><i class='fas fa-table-tennis'></i>Extra Activities</span>
  </div>
  <div class="card-body">
      <!--change should be here. Make it member testimony rather than fellowship_testimony, do update and delete-->
     
      <?php 
      //to get extra currcula activities of just KCF--> 
                            $query="SELECT extra_curriculum.extra_name, extra_curriculum.extra_type, fellowship_curriculum.fellowship_id 
                            FROM  extra_curriculum INNER JOIN fellowship_curriculum on fellowship_curriculum.extra_id=extra_curriculum.extra_id WHERE fellowship_id=114";

                           if($runQuery=mysqli_query($connection,$query)){

                            if(mysqli_num_rows($runQuery)>0)
                            {
                        
                                    echo "<table class='table'>";
                                    echo "<tr>";
                                    echo "<th>Curricula Name</th>";
                                    echo "<th>Curricula Type</th>";
                                    echo "</tr>";



                                while($row=mysqli_fetch_array($runQuery)){
                                    echo "<tr>";
                                    

                                    echo "<td>".$row['extra_name']. "</td>";

                                    echo "<td>".$row['extra_type']. "</td>";




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
      <p>ALWAYS FIRST EVER FIRST</p>
  </div>
</div>

</body>
</html>