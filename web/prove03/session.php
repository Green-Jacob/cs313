<?php
session_start();
session_unset();
$_SESSION["high-five"] = "3";
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <body>
     <p><?php printr($_SESSION);?></p>
   </body>
 </html>
