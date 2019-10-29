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
    <title>Add to Gradebook</title>
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
        <h1>Add to Gradebook</h1>
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
      <?php
      $c = $_POST['class'];
      $class = ucfirst($c);
      $class = str_replace("_", " ", $class);
      echo "<h2>Adding to $class</h2>";
       ?>
      <div class="box-large">
         <form class="" action="gradebook_modify.php" method="post">
           <input hidden type="text" name="class" value="<?php echo $c ?>">
           <?php
           try {
             foreach ($db->query("SELECT assignment, student, score FROM $c.gradebook") as $row)
             {
              $s = $row['student'];
              $sc = $row['score'];
              $a = $row['assignment'];
              echo "<input type=\"radio\" name=\"student\" value=\"$s\">";
              echo " Name :$s"." Assignment:$a"." Score:$sc<br><hr>";
              echo "<input hidden type=\"text\" name=\"assignment\" value=\"$a\">";
             }
           } catch (\Exception $e) {
             echo $e;
           }

            ?>
           <input type="submit" name="add" value="Remove Grade">
         </form>
      </div>
    </div><!-- end container -->
  </body>
</html>
