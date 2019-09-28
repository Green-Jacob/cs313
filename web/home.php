<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jake Green's Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
    <link rel="stylesheet" href="master.css">
    <link href="https://fonts.googleapis.com/css?family=Acme|Yanone+Kaffeesatz&display=swap"
    rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <header>
        <a href="home.php"><img src="JakeGreenLogo.jpg" alt="Jake Green" id="logo"></a>
        <h1>Jake <span id="green-text">Green</span>'s Homepage</h1>
      </header>
      <div class="sidebar">
        <div class="dropdown">
          <span>Pages</span>
          <div class="dropdown-list">
            <a href="home.php">Home</a><br>
            <a href="assignments.html">Jake's Assignments</a>
          </div>
        </div>
      </div>
      <div class="box-large font-yanone">
        <h2>Dice Roller</h2>
        <p>My wife and I enjoy board games. So I decided to make a dice roller.</p>
        <form action="home.php" method="get">
          Number of sides: <input type="number" name="sides" value=""><br>
        <input type="submit" name="" value="Roll">
        </form>
        <?php
          $sides = $_GET["sides"];
          $result = "";
          $roll = rand(0, $sides);
          $result = "You rolled a ". $roll;
          echo "<script>console.log(\"$result\")</script>";
         ?>
         <?php echo $result; ?>
      </div>
      <div class="box-large font-yanone">
        <h2 class="text-center">About My Hobbies</h2>
        <p>My hobbies include knife making, ring making, leather working,
          singing, and playing piano.</p>
        <p>I started making rings last summer. My wife and son were
          away most of that summer visiting family. I had a lot of
          time on my hands.<br>So, after watching some professionals
          on YouTube, I decided to give it a try.</p>
        <p>I started making knived just after that summer. I made knives as
        as Christmas gifts for my dad, brothers, and brother-in-law.<br> Leather
         working became necessary to make sheaths for the knives. </p>
        <p>Singing and piano are what I do when my wife doesn't
          want me making messes in the house.</p>
        <h3>YouTube Videos</h3>
        <p>I recently started recording my crafting to share on YouTube.
          This is mostly since I moved out of state my family doesn't
          get to see my projects in person.</p>
        <h4>My first and only video, so far.</h4>
        <div class="embed-responsive embed-responsive-16by9 bordered">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gmdexx9aomc"
          allowfullscreen></iframe>
        </div>
      </div>
    </div><!-- end container -->
  </body>
</html>
