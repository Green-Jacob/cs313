<?php
session_start();
$names = $_SESSION;
for ($i = 0; $i < count($names); $i++) {
  $name = $names[i];
  unset($_SESSION[$name]);
}
echo "Cleared Session";
 ?>
