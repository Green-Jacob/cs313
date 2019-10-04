<?php
session_start();
$names = array_keys($_GET);
$value = array_values($_GET);
$_SESSION[$names[0]] = $value[0];
echo "added ".($_SESSION[$names[0]]);
 ?>
