<?php
session_start();
foreach ($_SESSION as $key => $value) {
  unset($_SESSION[$key]);
}
unset($_SESSION[$name]);
echo "Cleared Session";
 ?>
