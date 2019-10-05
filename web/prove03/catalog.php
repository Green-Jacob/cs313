<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog of Amazing Things</title>
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
        <h1>Catalog of Amazing Things</h1>
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
        <h2>Hug $3.00</h2>
        <button class="addItem" type="button" name="Hug" value="$3.00"
        >Add to cart</button><br>
        <hr>
        <h2>Handshake $1.00</h2>
        <button class="addItem" type="button" name="Handshake" value="$1.00"
        >Add to cart</button><br>
      </div>
      <footer>
        <a href="cart.php">cart</a><br>
      </footer>
    </div><!-- end container -->
    <div hidden id="session_write">
      <p>yo</p>
    </div>
  </body>
</html>
