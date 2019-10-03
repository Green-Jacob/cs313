<?php
session_start();
$_SESSION["high-five"] = $_GET["highfive"];
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <body>
     <p><?php printr($_SESSION);
     printr($_GET); ?></p>
   </body>
 </html>
