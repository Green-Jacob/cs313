<?php
  $sides = $_GET["sides"];
  $result = "";
  $roll = rand(1, $sides);
  $result = "You rolled a ". $roll;
  console_log($result);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jake Green's Homepage</title>
    <link rel="stylesheet" href="master.css">
    <link href="https://fonts.googleapis.com/css?family=Acme|Yanone+Kaffeesatz&display=swap"
    rel="stylesheet">
    <script src="home.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="container">
      <header>
        <a href="home.php"><img src="JakeGreenLogo.jpg" alt="Jake Green" id="logo"></a>
        <h1>Jake <span id="green-text">Green</span>'s Homepage</h1>
      </header>
      <div class="sidebar">
        <a href="assignments.html">Jake's Assignments</a>
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
        <iframe width="560" height="315" src="https://www.youtube.com/embed/gmdexx9aomc"
        frameborder="0" allow="accelerometer; encrypted-media; gyroscope;
        picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="box-large font-yanone">
        <h2>Dice Roller</h2>
        <p>My wife and I enjoy board games. So I decided to make a dice roller.</p>
        <form action="home.php" method="get">
          Number of sides: <input type="number" name="sides" value=""><br>
          <button type="button" name="roll" onclick="return noReload();">Roll</button>
        </form>
        <?php echo $result; ?>
      </div>
    </div><!-- end container -->
  </body>
</html>
