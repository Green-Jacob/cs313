<?php
session_start();
$_SESSION['high-five'] = $_GET['high-five'];
if (isset($_SESSION['high-five'])) {
  echo "<html><p>"."{$_SESSION['high-five']}"."</p></html>";
}
 ?>
