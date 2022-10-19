<?php
session_start();
include('sidenavTKU.php');
require('../../../BACKEND/CONNECTIONS/database_connection.php');



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TKU ALMNI PAGE</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
     <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>


            
<div class="card w-75" style="margin-top: -600px; margin-left:270px">
  <div class="card-header text-light bg-secondary">
  <span><i class='fas fa-user-graduate'></i>Alumni Section</span>
  </div>
  <div class="card-body">
      <!--change should be here. Make it member testimony rather than fellowship_testimony, do update and delete-->
     
      <?php 
      //to get extra currcula activities of just KCF--> 
                            $query="SELECT work_section.company_name, work_section.work_position, members.fname, members.lname,members.phone_number FROM work_section INNER JOIN members ON work_section.member_id=members.member_id WHERE fellowship_id=112";
                            // $query="SELECT members.fname,members.lname,members.phone_number, work_section.company_name,work_section.company_position 
                            // FROM  members INNER JOIN work_section on members.member_id=work_section.member_id WHERE fellowship_id=111";

                           if($runQuery=mysqli_query($connection,$query)){

                            if(mysqli_num_rows($runQuery)>0)
                            {
                        
                                    echo "<table class='table'>";
                                    echo "<tr>";
                                    echo "<th>Alumni Firstname</th>";
                                    echo "<th>Alumni Lastname</th>";
                                    echo "<th>Alumni phone number</th>";
                                    echo "<th>Alumni Company</th>";
                                    echo "<th>Alumni Position</th>";

                                    echo "</tr>";



                                while($row=mysqli_fetch_array($runQuery)){
                                    echo "<tr>";
                                    

                                    echo "<td>".$row['fname']. "</td>";

                                    echo "<td>".$row['lname']. "</td>";

                                    echo "<td><i class='fa fa-phone'></i>" .$row['phone_number'].  "</td>";

                                    echo "<td><i class='fas fa-briefcase'></i>" .$row['company_name'].  "</td>";

                                    echo "<td><i class='fa fa-id-badge'></i>" .$row['work_position'].  "</td>";






                                }
                                echo "</table>";

                                mysqli_free_result($runQuery);

                                   
                                }else{
                                    echo "No records found";
                                }
                                }
                            

                            
                            ?>

  </div>
  <div class="card-footer text-light bg-secondary">
      <p>TKU Alumnis Break Protocol!</p>
  </div>
</div>

</body>
</html>