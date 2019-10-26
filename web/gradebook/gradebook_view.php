<?php
require 'dbConnect.php';
$db = connect_db();
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
        <h1>Gradebook View</h1>
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
        <h2>Add Grades</h2>
        <form class="" action="grades_add.php" method="post">
          Class:
          <select class="" name="class">
            <option value="seventh">Seventh</option>
            <option value="seventh_honors">Seventh Honors</option>
            <option value="eighth">Eighth</option>
            <option value="eighth_honors">Eighth Honors</option>
          </select>
          <input type="submit" name="add" value="Add Grade">
        </form>
      </div>
      <div class="box-large">
        <div class="box-small">
          <h2>Seventh Grade Entries</h2><hr>
          <?php
          try {
            foreach ($db->query('SELECT * FROM seventh.gradebook') as $row)
            {
              echo 'Name: ' . $row['student'];
              echo '<br/>';
              echo 'Assignment: ' . $row['assignment'];
              echo '<br/>';
              echo 'Score:' . $row['score'];
              echo '<br/><hr>';
            }
          } catch (\Exception $e) {
            echo "$e";
          }
           ?>
        </div>
        <div class="box-small">
          <h2>Seventh Grade Honors Entries</h2><hr>
          <?php
          try {
            foreach ($db->query('SELECT * FROM seventh_honors.gradebook') as $row)
            {
              echo 'Name: ' . $row['student'];
              echo '<br/>';
              echo 'Assignment: ' . $row['assignment'];
              echo '<br/>';
              echo 'Score:' . $row['score'];
              echo '<br/><hr>';
            }
          } catch (\Exception $e) {
            echo "$e";
          }
           ?>
        </div>
        <div class="box-small">
          <h2>Eighth Grade Entries</h2><hr>
          <?php
          try {
            foreach ($db->query('SELECT * FROM eighth.gradebook') as $row)
            {
              echo 'Name: ' . $row['student'];
              echo '<br/>';
              echo 'Assignment: ' . $row['assignment'];
              echo '<br/>';
              echo 'Score:' . $row['score'];
              echo '<br/><hr>';
            }
          } catch (\Exception $e) {
            echo "$e";
          }
           ?>
        </div>
        <div class="box-small">
          <h2>Eighth Grade Honors Entries</h2><hr>
          <?php
          try {
            foreach ($db->query('SELECT * FROM eighth_honors.gradebook') as $row)
            {
              echo 'Name: ' . $row['student'];
              echo '<br/>';
              echo 'Assignment: ' . $row['assignment'];
              echo '<br/>';
              echo 'Score:' . $row['score'];
              echo '<br/><hr>';
            }
          } catch (\Exception $e) {
            echo "$e";
          }
           ?>
        </div>
      </div>
    </div><!-- end container -->
  </body>
</html>
