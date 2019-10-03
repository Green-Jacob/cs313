<?php
session_start();
session_unset();
$_SESSION["high-five"] = "3";
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <body>
     <p><?php echo($_SESSION["high-five"]);?></p>
   </body>
 </html>
