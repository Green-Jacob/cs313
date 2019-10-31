<?php
try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
  //echo $dbHost.$dbPort.$dbUser.$dbName;
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (isset($username = $_POST['username'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $userExists = false;

      foreach ($db->query("SELECT username FROM users") as $row){
        if (username = $row['username']) {
        $userExists = true;
        }
      }
    }



    try {
      foreach ($db->query("SELECT * FROM users WHERE user = $username") as $row){
        $hash = $row['password'];
      }
    } catch (\Exception $e) {
      echo $e->getMessage();
    }

    $login = password_verify($password, $hash);


    $stmt = $db->prepare('INSERT INTO user_login(username, password) VALUES(:username, :password)');
    $stmt->bindValues(':username', $username);
    $stmt->bindValues(':password', $password);

     ?>

  </body>
</html>
