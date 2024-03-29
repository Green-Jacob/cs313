<?php
session_start();
require 'dbConnect.php';
$db = connect_db();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gradebook Search Results</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
    <link rel="stylesheet" href="gradebook.css">
    <link href="https://fonts.googleapis.com/css?family=Acme|Yanone+Kaffeesatz|ZCOOL+XiaoWei&display=swap"
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
      <div class="box-large">
        <?php
        switch ($_GET['search']) {
          case '1':
          $c = $_GET['class'];
          $s = $_GET['student'];
          echo "<div class='box-small'>";
          echo "<b>Grades of $s</b><br>";
          try {
            foreach ($db->query('SELECT assignment, score FROM '. $c . '.gradebook WHERE student = \'' . $s . '\'' ) as $row)
            {
              echo 'Assignment: <b>' . $row['assignment'] . '</b>';
              echo '<br/>';
              echo 'Score: <b>' . $row['score'] . '%</b>';
              echo '<br/><hr>';
            }
          } catch (\Exception $e) {
            echo $e;
          }
          echo "</div>";
            break;
          case '2':
          $t = $_GET['table'];
          $a = $_GET['assignment'];
          echo "<div class='box-small'>";
          echo "<b>Grades for $a</b><br>";
          try {
            foreach ($db->query('SELECT student, score FROM '. $t . '.gradebook WHERE assignment = \'' . $a . '\'' ) as $row)
            {
              echo 'Student: <b>' . $row['student'] . '</b>';
              echo '<br/>';
              echo 'Score: <b>' . $row['score'] . '%</b>';
              echo '<br/><hr>';
            }
          } catch (\Exception $e) {
            echo $e;
          }

          echo "</div>";
            break;
          case '3':
          echo "<div class='box-small'>";
          echo "<b>Class Students</b><br>";
          foreach ($db->query('SELECT name, period FROM '. $_GET['class'] . '.students') as $row)
          {
            echo 'Name: <b>' . $row['name'] . '</b>';
            echo '<br/>';
            echo 'Period: <b>' . $row['period'] . '</b>';
            echo '<br/><hr>';
          }
          echo "</div>";
          echo "<div class='box-small'>";
          echo "<b>Class Assignments</b><br>";
          foreach ($db->query('SELECT name, total_score FROM '. $_GET['class'] . '.assignments ORDER BY name') as $row)
          {
            echo 'Name: <b>' . $row['name'] . "</b>";
            echo '<br/>';
            echo 'Total Possible: <b>' . $row['total_score'] . "</b>";
            echo '<br/><hr>';
          }
          echo "</div>";
          echo "<div class='box-small'>";
          echo "<b>Class grades</b><br>";
          try {
            foreach ($db->query('SELECT * FROM '. $_GET['class'].'.gradebook ORDER BY student') as $row)
            {
              echo 'Name: <b>' . $row['student'] . '</b>';
              echo '<br/>';
              echo 'Assignment: <b>' . $row['assignment'] . '</b>';
              echo '<br/>';
              echo 'Score: <b>' . $row['score'].'%</b>';
              echo '<br/><hr>';
            }
          } catch (\Exception $e) {
            echo "$e";
          }
          echo "</div>";

            break;
          default:
            echo "No results found.";
            break;
        }
         ?>
      </div>
    </div><!-- end container -->
  </body>
</html>
