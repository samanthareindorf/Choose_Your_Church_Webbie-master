
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PENSA Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.js"></script>

<link rel="stylesheet" href="../TKU/tkuCSS.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">

      <img src="pensa.jpeg" alt="Logo" width="200px" height="210px" style="margin-top: -100px;">
      </a>
    </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../../HOME/index.php" style="text-decoration: none;">HOME</a></li>
        <li><a href="../../HOME/Explore.php" style="text-decoration: none;">FELLOWSHIPS</a></li>
        <li><a href="../../VIEW/signin.php" style="text-decoration: none;">LOG IN</a></li>
        <li><a href="../../VIEW/signup.php" style="text-decoration: none;">SIGN UP</a></li>
      </ul>
    </div>
  </div>
</nav>

<body>

<div class="container">
  <div class="container-fluid">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="pensa.jpeg" alt="First Slide" class="center" style=" width:auto; height:600px; " >
      </div>

      <div class="item">
        <img src="pensaMem1.jpeg" alt="Second Slide" class="center" style=" width:auto; height:600px;">
      </div>
    
      <div class="item">
        <img src="pensa3.jpeg" alt="Third Slide" class="center" style=" width:auto; height:600px;">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
</div>

<!--award section of Page-->

      <section class="awardSection"><br><br>
        <center>
          <div class="d1">
        <i class="fa fa-trophy" style="font-size:36px">Awards</i>
        </div><br>
        <!--div for  Awards table-->

  <div class="container-fluid">                             
  <table class="table table-hover bg-dark text-light">
    <thead>
      <tr>
        <th scope="col">Times Won</th>
        <th scope="col">Award Name</th>
        <th scope="col">Award Type</th>

      </tr>
    </thead>
      <tbody>
        <tr>
          <td>No awards so far</td>
          <td>No awards so far</td>
          <td>No awards so far</td>
          
        </tr>
      </tbody>
       
   </table>

    </center><br><br>
  </section>

        

  <!-- messages section-->
       <section class="msg"><br><br>
             <center>
              <div class="d2">
              <i class='fa fa-music' style='font-size:36px'>Messages</i>
              </div>
            </center><br><br>
         
            <table class="table table-bordered">
              <thead class="bg-secondary">
                <tr>
                <th scope="col">Ministration</th>
                <th scope="col">Listen</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> <i class='fa fa-record-vinyl'>Home Sweet Home</i></td>
                  <td><button onclick="signedIn()" type="button" class="btn btn-success btn-lg">Get access</button></td>
                </tr>

                <tr>
                <td> <i class='fa fa-record-vinyl'>The Pentecostal Life</i></td>
                <td><button onclick="signedIn()" type="button" class="btn btn-success btn-lg">Get access</button></td>
                </tr>


                <tr>
                <td> <i class='fa fa-record-vinyl'>Christ in me</i></td>
                <td><button onclick="signedIn()" type="button" class="btn btn-success btn-lg">Get access</button></td>
                </tr>



                <tr>
                <td><i class='fa fa-record-vinyl'>Growth</i></td>
                <td> <button onclick="signedIn()" type="button" class="btn btn-success btn-lg">Get access</button></td>
                </tr>

                <tr>
                <td><i class='fa fa-record-vinyl'>Leaving earth</i></td>
                <td><button onclick="signedIn()" type="button" class="btn btn-success btn-lg">Get access</button></td>
                </tr>


              </tbody>

            </table>
             

      </section>


<!--section for meeting times-->
      <section class="meeting"><br><br>
             <center>
              <div class="d3">
              <i class='fa fa-calendar' style='font-size:36px '>Meetings</i>
              </div>
            </center><br><br>

          <!--table for meetings-->
           <table class="table table-dark">
            <thead>
             <tr>
                <th scope="col">Day</th>
                <th scope="col">Name</th>
                <th scope="col">Time</th>
             </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tuesdays</td>
                  <td>Prayers</td>
                  <td>7:00pm-7:40pm</td>
                </tr>
                <tr>
                  <td>Fridays</td>
                  <td>Sermon on the mount</td>
                  <td>7:00pm-8:30pm</td>
                </tr>
                <tr>
                  <td>Saturdays</td>
                  <td>Room Visitation</td>
                  <td>7:00pm-8:30pm</td>
                </tr>
                <tr>
                  <td>Sundays</td>
                  <td>Small Group Discussions</td>
                  <td>9:00am-10:30am</td>
                </tr>
              </tbody>
            </table>
        </section>


        <!--section for Beths-->
        <section class="beths"><br><br>
             <center>
              <div class="d1">
              <i class='fa fa-user-friends' style='font-size:36px'>Creative</i>
              </div>
            </center><br><br>

 <div class="container-fluid">                             
  <table class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Type</th>
        <th scope="col">Creative</th>
        

            </tr>
          </thead>
            <tbody>
              <tr>
              <th scope="row">Choir, Music</th>
              <td>Pentecostal Voices</td>
            </tr>
            <tr>
              
              <th scope="row">Storytelling,Acting</th>
              <td>Pentecostal Fire</td>
            </tr>
            <tr>
              <th scope="row">Photography</th>
              <td>Pentecostal Vision</td>
            </tr>
            <tr>
              <th scope="row">Planning, Event  Management, Finance</th>
                <td>Pentecostal Financiers</td>
            </tr>
          </tbody>
   </table>
   </section>

  <!--pagination-->
   <div class="container-fluid">
  
  
  <ul class="pagination pagination-lg">
    <li ><a class="pagination pagination-success" href="../../VIEW/signup.php">Join Now</a></li>
    <li><a class="pagination pagination-danger" href="../../HOME/Explore.php">Previous</a></li>
    
  </ul>

  <script>
          //alerting the user that they have to be signed in or a member

          function signedIn()
          {
          $.bootstrapGrowl("You need to be a member or signed in to access this content",{
              type:"danger",
              offset:{from:"top", amount:1500},
              align:"center",
              delay:4000,
              allow_dismiss: true,
              stackup_spacing: 10
            });
          }



        </script>


</body>
</html>