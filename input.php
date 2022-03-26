<?php
$base = $_POST["base"];
$height = $_POST["height"];
$sideA = $_POST["side-a"];
$sideC = $_POST["side-c"];
$area = $base * $height / 2;
$perimeter = $base + $sideA + $sideC;
?>

The area of the triangle is <?php echo "$area" ?>cm<sup>2</sup>.<br>The perimeter of the triangle is <?php echo "$perimeter" ?>cm.