<?php
session_start();
$names = array_keys($_GET);
$value = array_values($_GET);
for ($i=0; $i < count($_SESSION); $i++) {
  $name = $names[i];
  unset($_SESSION[$name]);
}
echo "Cleared Session";
 ?>
