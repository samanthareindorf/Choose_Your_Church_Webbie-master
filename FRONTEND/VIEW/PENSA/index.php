<?php



session_start();

require('../../../BACKEND/CONNECTIONS/database_connection.php');


$result=mysqli_query($connection, "SELECT award_id,award_name, award_type FROM awards_section WHERE fellowship_id=113");




?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PENSA HOME PAGE</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

        


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['ID', 'Award Name and Count', ' Award Type'],

          <?php 

            if(mysqli_num_rows($result)>0){

              while($row=mysqli_fetch_array($result)){
                  echo "['".$row['award_id']."', '".$row['award_type']."', ['".$row['award_name']."']],";
              }

            }




          ?> 
        ]);

        var options = {
          chart: {
            title: 'PENSA Fellowship Performance',
            subtitle: 'PENSA Awards Won 2020-2021',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>


    </head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-warning bg-info">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">
                <!--put logo here-->
                <img src="pensa.jpeg" alt="Logo" width="50px" height="50px" style="background-color:blue;">
            </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 text-white" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
           
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw text-white"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                       
                        <!--for logout-->
                        <li><a class="dropdown-item" href="../signout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
              <!-- for profile image-->
              <span>
                <?php
                $user_id=$_SESSION['auth_user']['user_id'];
                //code to select profile image
                $query="SELECT profile_pic FROM user_profiles WHERE user_id='$user_id'";
                $uImg=mysqli_query($connection,$query);
                while($section=mysqli_fetch_assoc($uImg))
                {
                    $pro=$section['profile_pic'];
                }
                

                ?>
                <a href="profileChange.php">
                    <img src="<?php echo $pro?>" 
                    data-bs-toggle="tooltip" data-placement="bottom" title="click to upload a profile pic"   href="profileChange.php" alt="picture" width="50px" height="50px" style="border-radius:30px; margin-left:960px">
                </a>
            </span>
           
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon text-info"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">
                                <!--put specialized heading here-->
                                My Section
                            </div>
                          
                               <!--try putting meeting days here--> 


                    



                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon text-info"><i class="fas fa-book-open"></i></div>
                                <!--Try putting  extra curricula here-->
                                        Personal
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                           
                                    <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="PENSAindividual.php"> My Testimony</a>
                                            
                                        </nav>
                                    </div>
                                   
                            
                       
                         
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer bg-info">
                        <div class="small">Logged in as:</div>
                         <!--display username here-->
                         <div class="font-weight-bold text-dark">
                        <?php
                            echo $firstname=$_SESSION['auth_user']['fname'];
                           
                         ?>
                       
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Extra Curricula</div>
                                    <!--try enabling downloading here--> 
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="PENSAextra.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Alumni Connections</div>

                                       <!--insert a posting section--> 
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="PENSAalumni.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <!--get all the things from birthday here--> 
                                    <div class="card-body">Birthdays</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="PENSAbirthdays.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header text-light bg-dark">
                                        <i class="fas fa-chart-area me-1"></i>
                                        <!--display awards won-->
                                        PENSA Awards Won
                                    </div>
                                    <div class="card-body">
                                        <!--php code goes here--> 
                                        <div id="columnchart_material" style="height: 500px;"></div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        <div class="card mb-4">
                            <div class="card-header text-light bg-dark">
                                <i class="fas fa-table me-1"></i>
                                <!--crud table for testimonies, user can isnsert testimonies here-->
                                PENSA Members Testimonies
                            </div>
                            <div class="card-body">
                            <?php 
                            $query="SELECT testimonies.testimony_statement, testimonies.testimony_date, fellowship_testimony.fellowship_id 
                            FROM testimonies INNER JOIN fellowship_testimony on fellowship_testimony.testimony_id=testimonies.testimony_id WHERE fellowship_id=113";

                           if($runQuery=mysqli_query($connection,$query)){

                            if(mysqli_num_rows($runQuery)>0)
                            {
                        
                                    echo "<table class='table table-responsive'>";
                                    echo "<tr>";
                                    echo "<th>Testimony</th>";
                                    echo "<th>Testimony Date</th>";
                                    echo "</tr>";



                                while($row=mysqli_fetch_array($runQuery)){
                                    echo "<tr>";
                                    echo "<td>".$row['testimony_statement']. "</td>";

                                    echo "<td>" .$row['testimony_date'].  "</td>";



                                }
                                echo "</table>";

                                mysqli_free_result($runQuery);

                                   
                                }else{
                                    echo "No records found";
                                }
                                }
                            

                            
                            ?>

                                
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Samantha Reindorf WebTech 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
