<?php
session_start();
//session_unset();
$names[] = array_keys($_GET);
$name = names[0];
$_SESSION[$name] = $_GET[0];
//$_SESSION["high-five"] = $_GET["highfive"];
// debug
echo "<p> added ".($_SESSION["highfive"])."</p>";
 ?>
