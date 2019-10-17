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
        Gradebook Search
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
      <div class="box-large">
        <h2>Search Grades by Student</h2>
        This will be used to search the entered grades by student, class, or assignment.<br>
        As there isn't a way to add grades yet, these aren't working.
        <form class="box-small" action="search_results.php" method="post">
          <b>Seventh Grade</b><br>
          <input hidden type="text" name="class" value="seventh">
          <select class="" name="">
            <?php
            foreach ($db->query('SELECT name FROM seventh.students') as $row){
              echo '<option value="' . $row['name'] . '">'. $row['name'] . '</option>';
            }
            ?>
          </select><hr>
          <input type="submit" name="submit" value="Search">
        </form>
        <form class="" action="" method="post">
          Seventh Honors
          <input hidden type="text" name="class" value="seventh_honors">
          <select class="" name="">
            <?php
            foreach ($db->query('SELECT name FROM seventh_honors.students') as $row){
              echo '<option value="' . $row['name'] . '">'. $row['name'] . '</option>';
            }
            ?>
          </select><hr>
          <input type="submit" name="submit" value="Search">
        </form>
        <form class="" action="" method="post">
          Eighth
          <input hidden type="text" name="class" value="eighth">
          <select class="" name="">
            <?php
            foreach ($db->query('SELECT name FROM eighth.students') as $row){
              echo '<option value="' . $row['name'] . '">'. $row['name'] . '</option>';
            }
            ?>
          </select><hr>
          <input type="submit" name="submit" value="Search">
        </form>
        <form class="" action="" method="post">
          Eighth Honors
          <input hidden type="text" name="class" value="eighth_honors">
          <select class="" name="">
            <?php
            foreach ($db->query('SELECT name FROM eighth_honors.students') as $row){
              echo '<option value="' . $row['name'] . '">'. $row['name'] . '</option>';
            }
            ?>
          </select><hr>
          <input type="submit" name="submit" value="Search">
        </form>
      </div>
    </div><!-- end container -->
  </body>
</html>
