<?php
session_start();
var value = $_GET["highfive"];
$_SESSION["high-five"] = value;
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <body>
     <p><?php printr($_SESSION);
     printr($_GET); ?></p>
   </body>
 </html>
