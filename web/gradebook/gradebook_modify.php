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
    <title>Added to Gradebook</title>
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
        <h1>Added to Gradebook</h1>
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
        switch ($_GET['add']) {
          case 'Add Assignment':
            echo "<button type='button'><a href='assignments_view'>Back to Assignments</a></button>";
            try {
              $c = $_POST['class'];
              $n = $_POST['name'];
              $t = $_POST['total_score'];
              $statement = $db->prepare("INSERT INTO $c.assignments(name, total_score) VALUES(:name, :total_score)");
              $statement->bindValue(':name', $n, PDO::PARAM_STR);
              $statement->bindValue(':total_score', $t, PDO::PARAM_INT);
              $statement->execute();
              echo "<div class='box-small'>";
              echo "<h2>Successfully add $n to List.</h2><br>";
              echo "</div>";
            } catch (\Exception $e) {
              //echo "Error with database. Details: $e";
              echo "<div class='box-small'>";
              echo "Assignment not added. Most likely already exists in the list.";
              echo "</div>";
            }
            echo "<div class='box-small'>";
            echo "<h2>Assignment List</h2><br>";
            try {
              foreach ($db->query("SELECT name, total_score FROM $c.assignments ORDER BY name") as $row)
              {
                echo "Name: ".$row['name'];
                echo "<br>";
                echo "Total Possible: ".$row['total_score'];
                echo "<br><hr>";
              }
            } catch (\Exception $e) {
              echo "Error with database. Details: $e";
            }
            echo "</div>";
            break;
          case 'Add Student':
          try {
            $c = $_POST['class'];
            $n = $_POST['name'];
            $p = $_POST['period'];
            $statement = $db->prepare("INSERT INTO $c.students(name, period) VALUES(:name, :period)");
            $statement->bindValue(':name', $n, PDO::PARAM_STR);
            $statement->bindValue(':period', $p, PDO::PARAM_INT);
            $statement->execute();
            echo "<div class='box-small'>";
            echo "<h2>Successfully added $n to List.</h2><br>";
            echo "</div>";
          } catch (\Exception $e) {
            echo "Error with database. Details: $e";
            echo "<div class='box-small'>";
            echo "Student not added. Most likely already exists in the list.";
            echo "</div>";
          }
          echo "<div class='box-small'>";
          echo "<h2>Student List</h2><br>";
          try {
            foreach ($db->query("SELECT name, period FROM $c.students") as $row)
            {
              echo "Name: ".$row['name'];
              echo "<br>";
              echo "Period: ".$row['period'];
              echo "<br><hr>";
            }
          } catch (\Exception $e) {
            echo "Error with database. Details: $e";
          }
          echo "</div>";
            break;
          case 'Add Grade':
            $c = $_GET['class'];
            $a = $_GET['assignment'];
            $s = $_GET['student'];
            $sc = $_GET['score'];
            try {
                foreach ($db->query("SELECT * FROM $c.assignments WHERE name = $a") as $row)
                {
                  $t = $row['total_score'];
                  echo "Total retrieved: " . $t;
                }
                } catch (\Exception $e) {

            }
            echo "Total retrieved: " . $t;
            break;
          default:
            // code...
            break;
        }
      ?>
      </div>
    </div><!-- end container -->
  </body>
</html>
