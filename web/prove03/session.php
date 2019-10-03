<?php
session_start();
//session_unset();
$_SESSION["high-five"] = $_GET["highfive"];
// debug
echo "<p> added ".($_SESSION["high-five"])."</p>";
 ?>
