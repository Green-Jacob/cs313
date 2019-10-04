<?php
session_start();
$names = array_keys($_GET);
$value = array_values($_GET);
$name = $names[0];
$_SESSION[$name] = $value[0];
echo "<p> added ".($_SESSION[$name])."</p>";
 ?>
