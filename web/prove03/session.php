<?php
session_start();
//session_unset();
$_SESSION["high-five"] = $_GET["highfive"];
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <body>
     <p><?php echo($_SESSION["high-five"]);?></p>
   </body>
 </html>
