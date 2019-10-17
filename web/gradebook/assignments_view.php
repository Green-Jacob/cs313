<?php
require 'dbConnect.php';
$db = connect_db();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignments</title>
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
        <h1>Assignment View</h1>
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
        Function for adding assignments will go here
      </div>
      <div class="box-small">
        <h2>Seventh Grade Assignments</h2><hr>
        <?php
        foreach ($db->query('SELECT name, total_score FROM seventh.assignments ORDER BY name') as $row)
        {
          echo 'Name: <b>' . $row['name'] . "</b>";
          echo '<br/>';
          echo 'Total Possible: <b>' . $row['total_score'] . "</b>";
          echo '<br/><hr>';
        }
         ?>
      </div>
      <div class="box-small">
        <h2>Seventh Grade Honors Assignments</h2><hr>
        <?php
        foreach ($db->query('SELECT name, total_score FROM seventh_honors.assignments ORDER BY name') as $row)
        {
          echo 'Name: <b>' . $row['name'] . "</b>";
          echo '<br/>';
          echo 'Total Possible: <b>' . $row['total_score'] . "</b>";
          echo '<br/><hr>';
        }
         ?>
      </div>
      <div class="box-small">
        <h2>Eighth Grade Assignments</h2><hr>
        <?php
        foreach ($db->query('SELECT name, total_score FROM eighth.assignments ORDER BY name') as $row)
        {
          echo 'Name: <b>' . $row['name'] . "</b>";
          echo '<br/>';
          echo 'Total Possible: <b>' . $row['total_score'] . "</b>";
          echo '<br/><hr>';
        }
         ?>
      </div>
      <div class="box-small">
        <h2>Eighth Grade Honors Assignments</h2><hr>
        <?php
        foreach ($db->query('SELECT name, total_score FROM eighth_honors.assignments ORDER BY name') as $row)
        {
          echo 'Name: <b>' . $row['name'] . "</b>";
          echo '<br/>';
          echo 'Total Possible: <b>' . $row['total_score'] . "</b>";
          echo '<br/><hr>';
        }
         ?>
      </div>
    </div><!-- end container -->
  </body>
</html>
