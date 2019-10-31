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
    <link rel="stylesheet" href="gradebook.css">
    <link href="https://fonts.googleapis.com/css?family=Acme|Yanone+Kaffeesatz|ZCOOL+XiaoWei&display=swap"
    rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="gradebook.js" charset="utf-8"></script>
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
      <h2>Add assignment</h2>
      <div class="sidebar">
        <form class="" action="gradebook_modify.php" method="post">
          Class:
          <select class="" name="class">
            <option value="seventh">Seventh</option>
            <option value="seventh_honors">Seventh Honors</option>
            <option value="eighth">Eighth</option>
            <option value="eighth_honors">Eighth Honors</option>
          </select>
          Name: <input type="text" name="name" value=""><br>
          Total Possible: <input type="number" name="total_score" max="200" value="">
          <input type="submit" name="add" value="Add Assignment">
        </form>
      </div>
      <div class="box-large">
        <h2>Assignments by Class</h2>
        <div class="sidebar">
          <button type="button" class="btn btn-primary bordered" id="showSeventh">Show Seventh Grade</button>
          <button type="button" class="btn btn-primary bordered" id="hideSeventh">Hide Seventh Grade</button><br>
        </div>
        <div class="box-small" id="seventh">
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
        <div class="sidebar">
        <button type="button" class="btn btn-primary bordered" id="showSeventhHonors">Show Seventh Honors Grade</button>
        <button type="button" class="btn btn-primary bordered" id="hideSeventhHonors">Hide Seventh Honors Grade</button><br>
        </div>
        <div class="box-small" id="seventhHonors">
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
        <div class="sidebar">
        <button type="button" class="btn btn-primary bordered" id="showEighth">Show Eighth Grade</button>
        <button type="button" class="btn btn-primary bordered" id="hideEighth">Hide Eighth Grade</button><br>
        </div>
        <div class="box-small" id="eighth">
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
        <div class="sidebar">
        <button type="button" class="btn btn-primary bordered" id="showEighthHonors">Show Eighth Honors Grade</button>
        <button type="button" class="btn btn-primary bordered" id="hideEighthHonors">Hide Eighth Honors Grade</button><br>
        </div>
        <div class="box-small" id="eighthHonors">
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
      </div>
    </div><!-- end container -->
  </body>
</html>
