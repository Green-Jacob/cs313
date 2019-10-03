<?php
session_start();
session_unset();
var value = $_GET["highfive"];
$_SESSION["high-five"] = value;
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <body>
     <p><?php printr($_SESSION);?></p>
   </body>
 </html>
