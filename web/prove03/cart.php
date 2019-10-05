<?php
session_start();
$names = array_keys($_SESSION);
$values = array_values($_SESSION);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
    <link rel="stylesheet" href="../master.css">
    <link href="https://fonts.googleapis.com/css?family=Acme|Yanone+Kaffeesatz&display=swap"
    rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="prove03.js" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="prove03.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="container">
      <header>
        <a href="../home.php"><img src="../JakeGreenLogo.jpg" alt="Jake Green" id="logo"></a>
        <h1>Cart</h1>
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
        <?php
        if (isset($_SESSION) == false) {
          echo "Nothing in the cart.<br>";
          echo "<a href=\"catalog.php\">Return to catalog</a>";
        }
        else {
          foreach ($_SESSION as $key => $value) {
            if ($key == "Handshake" || $key == "Hug") {
              $item = "Item: ".$key." Price: ".$value;
              $button = "<button class=\"removeItem\" type=\"button\" name=\"".$key."\" value=\"".$value."\">Click to Remove</button>";
              echo $item."<br>".$button."<br>";
            }
          }
        }
         ?>
      </div>
      <footer>
        <a href="catalog.php">catalog</a><br>
        <a href="checkout.php">checkout</a><br>
        <a href="confirm.php">confirm</a>
      </footer>
    </div><!-- end container -->
    <div hidden id="session_write">
      <p>yo</p>
    </div>
  </body>
</html>
