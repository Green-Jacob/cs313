<?php
session_start();
$names = array_keys($_SESSION);
for ($i=0; $i < count($_SESSION); $i++) {
  $name = $names[i];
  unset($_SESSION[$name]);
}
echo "Cleared Session";
 ?>
