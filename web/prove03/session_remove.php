<?php
session_start();
$names = array_keys($_GET);
$value = array_values($_GET);
$name = $names[0];
unset($_SESSION[$name]);
echo "removed ".($_SESSION[$name]);
 ?>
