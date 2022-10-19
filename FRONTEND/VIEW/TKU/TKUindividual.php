<?php

session_start();
include('../../../BACKEND/CONNECTIONS/database_connection.php');
include('sidenavTKU.php');
include('../message.php');




// testimony form controller--some changes need to be here. Should be member and not fellowship, 

            if(isset($_POST['submit'])){
                $testimony_statement=$_POST['testimony_statement'];
                $testimony_date=$_POST['testimony_date'];

                
                //to get user currently logged in
                $user_id=$_SESSION['auth_user']['user_id'];

                //sql query
                $sqlQuery="INSERT INTO tku_user_testimony (user_id, testimony_statement, testimony_date) VALUES ('$user_id','$testimony_statement','$testimony_date')";

                

                if(mysqli_query($connection, $sqlQuery)){
                    $_SESSION['message1']="Your testimony has been sent!";


                }else{
                    $_SESSION['message2']="Something went wrong";

                }
            }
          
           




          



         
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TKU Page Personal</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
     <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/css/bootstrap-modal-bs3patch.css"></link>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js"></script>
</head>
<body>

<!--form for inserting testimonies--> 

<form style="margin-left: 270px; margin-top: -779px; width:1100px" method="POST">
  <div class="form-group">
    <label>Testimony</label>
    <input type="textarea" class="form-control" name="testimony_statement"  placeholder="Enter you testimony">
    
  </div>
  <div class="form-group">
    <label>Date</label>
    <input type="date" name="testimony_date" class="form-control">
  </div><br>
  
  <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
</form><br> 




    








<!--testimony section for current user--> 


<div class="card w-75" style="margin-top: 12px; margin-left:270px">
  <div class="card-header text-light bg-dark">
  <span><i class='fas fa-pray'></i>My Testimonies</span>
  </div>
  <div class="card-body">
      <!--fellowship_testimony, FOR update and delete-->
     
      <?php 
                            $user_id=$_SESSION['auth_user']['user_id'];

                            $query="SELECT users.user_id, users.fname, users.lname, tku_user_testimony.testimony_statement,tku_user_testimony.testimony_id, tku_user_testimony.testimony_date FROM users 
                            INNER JOIN tku_user_testimony on tku_user_testimony.user_id=$user_id WHERE fellowship_id=112
                            AND users.user_id=$user_id";


                           if($runQuery=mysqli_query($connection,$query))
                           {

                            if(mysqli_num_rows($runQuery)>0)
                            {
                        
                                    echo "<table class='table-responsive table table-bordered'>";
                                    echo "<tr>";
                                    echo "<th>Firstname</th>";
                                    echo"<th>Lastname</th>";
                                    echo "<th>Testimony Statement</th>";
                                    echo "<th>Testimony Date</th>";
                                    echo"<th>EDIT</th>";
                                    echo"<th colspan=3>DELETE</th>";

                                    echo "</tr>";



                                while($row=mysqli_fetch_array($runQuery))
                                {
                                    echo "<tr>";
                                    
                                    echo "<td>".$row['fname']. "</td>";

                                    echo "<td>".$row['lname']. "</td>";
                                    
                                    echo "<td>".$row['testimony_statement']. "</td>";

                                    echo "<td>".$row['testimony_date']. "</td>";

       ?>
                                    <td>

                                    <form action="edit.php" method="POST">
                                      <input type="hidden" name="edit_id" value="<?php echo $row['testimony_id'];?>">

                                      <button type="submit"class='btn btn-info' name="edit_btn"><i class='fas fa-edit'></i></button>

                                    </form>


                                    </td>


                                    <td>
                                    <form action="delete.php" method="POST">
                                      <input type="hidden" name="delete_id" value="<?php echo $row['testimony_id'];?>">

                                      <button type="submit"class='btn btn-danger' name="delete_btn"><i class='fa fa-trash'></i></button>

                                    </form>

                                    </td>
                                  

                                    <?php

                                }

                                echo "</table>";

                                mysqli_free_result($runQuery);

                                   
                              }
                              else
                              {
                                 echo "No records found";
                              }
                          }
                          else{
                            echo "<h3 style='color:red'>Not signed in</h3>";
                          }
                         
                            

                              
                            ?>

  </div>
  <div class="card-footer text-light bg-dark">
      <p>For they overcame the world by the blood and the word of their testimony!</p>
  </div>
</div>


</body>
</html>