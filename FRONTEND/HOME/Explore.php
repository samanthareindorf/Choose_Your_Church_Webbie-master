

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <!-- external css -->
    <link rel="stylesheet" href="explore.css">
    <script src="../../BACKEND/JS/functions.js"></script>
    <title>Explore</title>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
  
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">
      <img src="images/logo1.jpg" alt="logo" width="94px" height="74px" style="margin-top: -20px; margin-left:-20px">
      </a>
    </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="Explore.php">FELLOWSHIPS</a></li>
        <li><a href="../VIEW/signin.php">LOG IN</a></li>
        <li><a href="../VIEW/signup.php">SIGN UP</a></li>
      </ul>
    </div>
  </div>
</nav>

<body class="Expbody">
   

 
	<br><br>
    <center>
    <h3 id="1stH3">Explore the Denominations!</h3>
        <div class='center'>
	        <div class="row">
		        <div class="column">
			        <div class="card">
				
                        <p> <img src="../VIEW/KCF/kcf.jpeg" alt="Image" width="300px" height="300px"></p>

				        <h3>KCF</h3>
				
                            <p>100 members</p>
                            <span>
                             <button onclick="openKCFExplore()" class="btn-md btn btn-warning ">Explore</button><br>
                             <!-- <button onclick="openJoinForm()" class="btn-md btn btn-success">Join</button> -->
                            </span>
                            

			        </div>
		        </div>
		            <div class="column">
			            <div class="card">
				
                        <p> <img src="../VIEW/TKU/tku.png" alt="tku" width="300px" height="300px"></p>

				            <h3>TKU</h3>
				
                            <p>30 members</p>
                            <span>
                             <button onclick="openTkuExplore()" class="btn-md btn btn-warning ">Explore</button><br>
                             <!-- <button onclick="openJoinForm()" class="btn-md btn btn-success">Join</button> -->
                            </span>

			            </div>
		            </div>
                </div>
                    <br><br><br><br><br><br><br>
            <div class="row">
		        <div class="column">
			        <div class="card">
				
                     <p><img src="../VIEW/PENSA/pensa.jpeg" alt="PENSA" width="300px" height="300px"></p>

				        <h3>PENSA</h3>
				
                        <p>30 members</p>
                             <span>
                                 <button onclick="openPENSAExplore()" class="btn-md btn btn-warning ">Explore</button><br>
                                 <!-- <button onclick="openJoinForm()" class="btn-md btn btn-success">Join</button> -->
                            </span>

			</div>
		    </div>

            <div class="column">
			    <div class="card">
        
                     <p><img src="../VIEW/FIRST/firstLove.png" alt="fisrtLove" width="300px" height="300px"></p>

				        <h3>FIRST LOVE</h3>
				
                         <p>70 members</p>
                             <span>
                             <button onclick="openFIRSTloveExplore()" class="btn-md btn btn-warning ">Explore</button><br>
                             <!-- <button onclick="openJoinForm()" class="btn-md btn btn-success">Join</button> -->
                            </span>

			    </div>
		        </div>
	            </div>
        </div><br><br><br><br><br><br><br><br><br><br>
    </center>


  
    
</body>
</html>