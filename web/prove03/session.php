<?php
session_start();
//session_unset();
$names = array_keys($_GET);
$value = array($_GET);
$name = $names[0];
echo "<p> added ".$name."</p>";
$_SESSION[$name] = $value[0];
//$_SESSION["high-five"] = $_GET["highfive"];
// debug
echo "<p> added ".($_SESSION["highfive"])."</p>";
 ?>
