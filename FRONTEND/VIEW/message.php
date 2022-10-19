

<?php
if(isset($_SESSION['message2']))
{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
<strong><?=$_SESSION['message2'];?></strong>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>

<?php
        unset($_SESSION['message2']);

} 

?>


<?php

if(isset($_SESSION['message1']))
{
?>
<div class="alert alert-success" role="alert">
  <strong>🎉<?=$_SESSION['message1'];?></strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>
<?php

 unset($_SESSION['message1']);

  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</head>
<body>
</body>
</html>




