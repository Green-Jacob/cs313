<?php
session_start();
var value = $_POST["highfive"];
$_SESSION["high-five"] = String(value);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <body>
     <p><?php printr($_SESSION);?></p>
   </body>
 </html>
