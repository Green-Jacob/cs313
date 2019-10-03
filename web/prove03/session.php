<?php
session_start();
$_SESSION["high-five"] = $_GET["highfive"];
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <body>
     <?php printr($_SESSION) ?>
   </body>
 </html>
