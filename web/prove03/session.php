<?php
session_start();
if (isset($_GET["high-five"])) {
  $_SESSION['high-five'] = $_GET['session_name'];
}
 ?>
