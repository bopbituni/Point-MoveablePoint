<?php
include_once "Point.php";
include_once "MoveablePoint.php";

$point = new Point(5,10);
$point->toString();
echo "<br>";

$movePoint = new MoveablePoint(5,10,15,20);
$movePoint->toString();
echo "<br>";
print_r ($movePoint->move());
