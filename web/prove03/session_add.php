<?php
session_start();
$names = array_keys($_GET);
$values = array_values($_GET);
$name = htmlspecialchars_decode($name[0]);
$value = htmlspecialchars_decode($values[0]);
$_SESSION[$name] = $value;
echo "added ".($_SESSION[$name]);
 ?>
