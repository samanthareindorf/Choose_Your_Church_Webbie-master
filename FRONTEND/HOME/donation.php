
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Page</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <!--boostrap cdn--> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <!--external styling--> 
    <link rel="stylesheet" href="donation.css">

</head>
<body>
<section  id="cover" class="min-vh-100">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="display-4 py-2 text-truncate">Donate</h1>
                    <div class="px-2">
                        <form action="../../BACKEND/CONTROLLERS/donationController.php" class="justify-content-center" method="POST">
                            <small style="color: red;">*All donations are in cedis</small>
                            <div class="form-group">
                                <label class="sr-only"></label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label class="sr-only"></label>
                                <input type="text" name="email" class="form-control" placeholder="jane.doe@example.com">
                            </div>
                            <div class="form-group">
                            <label class="sr-only"></label>
                            <select class="form-select" aria-label="Default example" name="paymentOption">
                                <option value="Mobile Money">Mobile Money</option>
                                <option value="VISA">VISA</option>
                                 <!-- <option value="3">Three</option> -->
                             </select>
                            </div>
                            <div class="form-group">
                                <label class="sr-only"></label>
                                <input type="text" name="amount" class="form-control" placeholder="Enter a number example 300">
                            </div><br>
                            <div class="form-group">
                            <button class="form-control btn btn-primary btn-lg" name="donate" type="submit" >Donate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button onclick="openHomePage()" class="btn btn-primary btn-lg">Back to Home</button>

</section>
<script>
        function openHomePage()
        {
            window.open('index.php');
        }
    </script>

</body>


</html>