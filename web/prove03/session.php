<?php
session_start();
$_SESSION['high-five'] = $_GET['high-five'];
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <body>
     <<?php printr($_SESSION) ?>
   </body>
 </html>
