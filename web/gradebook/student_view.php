<?php
require 'dbConnect.php';
$db = connect_db();
 ?>
 <?php
 function displayNames($class)
 {
   $string = "";
   foreach ($db->query('SELECT name, period FROM' . $class . '.students') as $row)
   {
     $string .= 'Name: ' . $row['name'];
     $string .= '<br/>';
     $string .= 'Period: ' . $row['period'];
     $string .= '<br/><hr>';
   }
   return $string;
 }
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gradebook Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
    <link rel="stylesheet" href="../master.css">
    <link href="https://fonts.googleapis.com/css?family=Acme|Yanone+Kaffeesatz&display=swap"
    rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <header>
        <h1>Student View</h1>
      </header>
      <div class="sidebar">
        <div class="dropdown">
          <a href="../home.php">Home</a>
        </div>
        <div class="dropdown">
          <span>Gradebook pages</span>
          <div class="dropdown-list">
            <a href="index.php">Gradebook Home</a>
            <a href="gradebook_view.php">Graded entries</a>
            <a href="student_view.php">Students</a>
            <a href="assignments_view.php">Assignments</a>
          </div>
        </div>
        <div class="dropdown">
          <a href="search.php">Search</a>
        </div>
      </div>
      <div class="sidebar">
        Function for adding a student will go here.
      </div>
      <div class="box-small">
        <h2>Seventh Grade Students</h2><hr>
        <?php
        foreach ($db->query('SELECT name, period FROM seventh.students') as $row)
        {
          echo 'Name: ' . $row['name'];
          echo '<br/>';
          echo 'Period: ' . $row['period'];
          echo '<br/><hr>';
        }
         ?>
      </div>
      <div class="box-small">
        <h2>Seventh Grade Honors Students</h2><hr>
        <?php
        foreach ($db->query('SELECT name, period FROM seventh_honors.students') as $row)
        {
          echo 'Name: ' . $row['name'];
          echo '<br/>';
          echo 'Period: ' . $row['period'];
          echo '<br/><hr>';
        }
         ?>
      </div>
      <div class="box-small">
        <h2>Eighth Grade Students</h2><hr>
        <?php
        foreach ($db->query('SELECT name, period FROM eighth.students') as $row)
        {
          echo 'Name: ' . $row['name'];
          echo '<br/>';
          echo 'Period: ' . $row['period'];
          echo '<br/><hr>';
        }
         ?>
      </div>
      <div class="box-small">
        <h2>Eighth Grade Honors Students</h2><hr>
        <?php
        /*foreach ($db->query('SELECT name, period FROM eighth_honors.students') as $row)
        {
          echo 'Name: ' . $row['name'];
          echo '<br/>';
          echo 'Period: ' . $row['period'];
          echo '<br/><hr>';
        }*/
        echo displayNames('eighth_honors');
         ?>
      </div>
    </div><!-- end container -->
  </body>
</html>
