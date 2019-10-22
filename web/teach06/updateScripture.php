<?php
require "dbConnect.php";
$db = connect_db();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    foreach ($db->query('SELECT book, chapter, verse, content FROM public.scripture') as $row)
    {
      echo 'Book: <b>' . $row['book'] . "</b>";
      echo '<br/>';
      echo 'Chapter: <b>' . $row['Chapter'] . "</b>";
      echo 'Verse: <b>' . $row['verse'] . "</b>";
      echo '<br/>';
      echo 'Content: <b>' . $row['content'] . "</b>";
      echo '<br/><hr>';
    }
     ?>
  </body>
</html>
