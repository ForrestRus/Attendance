<?php
include 'includes/session.php'

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap demo -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/site.css"/>

    <title>Attendance - <?php echo $title ?></title>
</head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <a class="navbar-brand" href="index.php">IT Conference</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse          container   " id="navbarNavAltMarkup">
          <div class = "navbar-nav mr-auto">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="viewrecords.php">View Attendees</a>
          </div>
          <div class = "navbar-nav ml-auto">
              <?php
                if(!isset($_SESSION['id'])){
              ?>
                  <a class = "nav-item nav-link" href="login.php">Login <span class = "sr-only">(current)</span></a>
              <?php } else { 
              ?>
                <a class ="nav-item nav-link" href="#"><span>Hello <?php echo $_SESSION['username'] ?>! </span> <span class="sr-only">(current)</span></a>
                <a class = "nav-item nav-link" href="logout.php"> Logout <span class = "sr-only">(current)</span></a>
              <?php } ?>  
            </div>
        </div>
      </nav>
  <div class="container">
  
      <br/>

