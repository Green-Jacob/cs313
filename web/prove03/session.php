<?php
session_start();
if (isset($_GET['high-five'])) {
  $_SESSION['high-five'] = $_GET['high-five'];
}
if (isset($_SESSION['high-five'])) {
  echo "<p>"."{$_SESSION['high-five']}"."</p>";
}
 ?>
