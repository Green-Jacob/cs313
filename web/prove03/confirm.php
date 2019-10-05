<?php  session_start();?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
    <link rel="stylesheet" href="../master.css">
    <link href="https://fonts.googleapis.com/css?family=Acme|Yanone+Kaffeesatz&display=swap"
    rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="prove03.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="container">
      <header>
        <a href="../home.php"><img src="../JakeGreenLogo.jpg" alt="Jake Green" id="logo"></a>
        <h1>Confirmation</h1>
      </header>
      <div class="sidebar">
        <div class="dropdown">
          <span>Pages</span>
          <div class="dropdown-list">
            <a href="../home.php">Home</a><br>
            <a href="../assignments.html">Jake's Assignments</a>
          </div>
        </div>
      </div>
      <div class="box-large font-yanone">
        Order Confirmation <br>
        <?php
        foreach ($_SESSION as $key => $value) {
          if ($key == "handshake" || $key == "highfive") {
            print "Item: ".$key." Price: $".$value.".00<br>";
          }
          else {
            if ($_SESSION["address"]) {
              print "Address: ".$value."<br onload=\"refreshPage()\">";
            }
          }
        }
         ?>
      </div>
      <footer>
        <a href="cart.php">cart</a><br>
        <a href="checkout.php">checkout</a><br>
        <a href="catalog.php">catalog</a>
      </footer>
    </div><!-- end container -->
  </body>
</html>
