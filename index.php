<!DOCTYPE html>
<html>
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My first webpage with user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="MariaG">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Area and Perimeter of a Triangle with User Input in PHP- Maria Goemans</title>
  </head>
  <body>
    <?php 
      echo "<h1>Calculating the Area and Perimeter of a Triangle in PHP with User Input</h1>";
      echo "<h3>Introduction:</h3>";
      echo "<p>Welcome to my webpage! Input the side lengths and height of a triangle below, and the program I've written will calculate the triangle's area and perimeter for you!</p>";
    ?>
    <!-- Table to put triangle shape and formulas side by side -->
    <center>
      <table>
        <td><div class="triangle-up"></div></td>
        <td id="font"><?php echo "<p>Area = base x height / 2<br>Perimeter = side a + base + side c</p>"; ?></td>
      </table>
    </center>
    <!-- Div for style -->
    <div id="purple">
      <?php echo "<h3>Your Input:</h3>" ?>
      <form action="./input.php" method="post" target="result">
        <label for="base">Length of the triangle's base</label>
        <input type="number" id="base-length" placeholder="Base length" min="1" name="base"><br><br>
        <label for="side-a">Another side length</label>
        <input type="number" id="side-a-length" placeholder="Side length" min="1" name="side-a"><br><br>
        <label for="side-c">Last side length</label>
        <input type="number" id="side-c-length" placeholder="Last side length" min="1" name="side-c"><br><br>
        <label for="height">Height of the triangle</label>
        <input type="number" id="height" placeholder="Height" min="1" name="height"><br><br>
        <input type="submit" value="Enter values">
      </form>
    </div>
    <!-- Div for styling results -->
    <div id="colour">
      <h3>Our Calculations:</h3>
      <!-- Iframe for the results to show -->
      <iframe id="result" name="result">
      </iframe>
    </div>
  </body>
</html>