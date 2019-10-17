<?php session_start();
require 'dbConnect.php';
$db = connect_db();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gradebook Search</title>
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
        <h1>Gradebook Search</h1>
      </header>
      <div class="sidebar">
        <div class="dropdown">
          <a href="../home.php">Home</a>
        </div>
        <div class="dropdown">
          <span>Gradebook pages</span>
          <div class="dropdown-list">
            <a href="gradebook_view.php">Graded entries</a>
            <a href="student_view.php">Students</a>
            <a href="assignments_view.php">Assignments</a>
          </div>
        </div>
        <div class="dropdown">
          <a href="search.php">Search</a>
        </div>
      </div>
      <h2>Search Grades by Student</h2><br>
      <div class="box-large">
        <form class="box-inner" action="search_results.php" method="get">
          <b>Seventh Grade</b><br>
          <input hidden type="text" name="search" value="1">
          <input hidden type="text" name="table" value="seventh.students">
          <select class="form-control" name="">
            <?php
            foreach ($db->query('SELECT name FROM seventh.students') as $row){
              echo '<option value="' . $row['name'] . '">'. $row['name'] . '</option>';
            }
            ?>
          </select><hr>
          <input type="submit" name="submit" value="Search">
        </form>
        <form class="box-inner" action="search_results.php" method="get">
          <b>Seventh Honors</b><br>
          <input hidden type="text" name="search" value="1">
          <input hidden type="text" name="table" value="seventh_honors.students">
          <select class="form-control" name="">
            <?php
            foreach ($db->query('SELECT name FROM seventh_honors.students') as $row){
              echo '<option value="' . $row['name'] . '">'. $row['name'] . '</option>';
            }
            ?>
          </select><hr>
          <input type="submit" name="submit" value="Search">
        </form>
        <form class="box-inner" action="search_results.php" method="get">
          <b>Eighth Grade</b><br>
          <input hidden type="text" name="search" value="1">
          <input hidden type="text" name="table" value="eighth.students">
          <select class="form-control" name="">
            <?php
            foreach ($db->query('SELECT name FROM eighth.students') as $row){
              echo '<option value="' . $row['name'] . '">'. $row['name'] . '</option>';
            }
            ?>
          </select><hr>
          <input type="submit" name="submit" value="Search">
        </form>
        <form class="box-inner" action="search_results.php" method="get">
          <b>Eighth Honors</b><br>
          <input hidden type="text" name="search" value="1">
          <input hidden type="text" name="table" value="eighth_honors.students">
          <select class="form-control" name="">
            <?php
            foreach ($db->query('SELECT name FROM eighth_honors.students') as $row){
              echo '<option value="' . $row['name'] . '">'. $row['name'] . '</option>';
            }
            ?>
          </select><hr>
          <input type="submit" name="submit" value="Search">
        </form>
      </div><!-- end search by student -->
      <h2>Search Grades by Assignment</h2><br>
      <div class="box-large">
        <form class="box-inner" action="search_results.php" method="get">
          <b>Seventh Grade</b><br>
          <input hidden type="text" name="search" value="2">
          <input hidden type="text" name="table" value="seventh.assignments">
          <select class="form-control" name="">
            <?php
            foreach ($db->query('SELECT name FROM seventh.assignments') as $row){
              echo '<option value="' . $row['name'] . '">'. $row['name'] . '</option>';
            }
            ?>
          </select><hr>
          <input type="submit" name="submit" value="Search">
        </form>
        <form class="box-inner" action="search_results.php" method="get">
          <b>Seventh Honors</b><br>
          <input hidden type="text" name="search" value="2">
          <input hidden type="text" name="table" value="seventh_honors.assignments">
          <select class="form-control" name="">
            <?php
            foreach ($db->query('SELECT name FROM seventh_honors.assignments') as $row){
              echo '<option value="' . $row['name'] . '">'. $row['name'] . '</option>';
            }
            ?>
          </select><hr>
          <input type="submit" name="submit" value="Search">
        </form>
        <form class="box-inner" action="search_results.php" method="get">
          <b>Eighth Grade</b><br>
          <input hidden type="text" name="search" value="2">
          <input hidden type="text" name="table" value="eighth.assignments">
          <select class="form-control" name="">
            <?php
            foreach ($db->query('SELECT name FROM eighth.assignments') as $row){
              echo '<option value="' . $row['name'] . '">'. $row['name'] . '</option>';
            }
            ?>
          </select><hr>
          <input type="submit" name="submit" value="Search">
        </form>
        <form class="box-inner" action="search_results.php" method="get">
          <b>Eighth Honors</b><br>
          <input hidden type="text" name="search" value="2">
          <input hidden type="text" name="table" value="eighth_honors.assignments">
          <select class="form-control" name="">
            <?php
            foreach ($db->query('SELECT name FROM eighth_honors.assignments') as $row){
              echo '<option value="' . $row['name'] . '">'. $row['name'] . '</option>';
            }
            ?>
          </select><hr>
          <input type="submit" name="submit" value="Search">
        </form>
      </div><!-- end search by assignment -->
      <h2>Search by Class</h2>
      <div class="box-large">
        <form class="" action="search_results.php" method="get">
          <input hidden type="text" name="search" value="3">
        <select class="form-control" name="class">
          <option value="seventh">Seventh</option>
          <option value="seventh_honors">Seventh Honors</option>
          <option value="eighth">Eighth</option>
          <option value="eighth_honors">Eighth Honors</option>
        </select>
        <input type="submit" name="submit" value="Search">
        </form>
      </div><!-- end search by class -->
    </div><!-- end container -->
  </body>
</html>
