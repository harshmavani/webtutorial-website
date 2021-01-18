<?php
$arr = array(3 => "Apple", 5 => "Ball", 11 => "Cat");
echo current($arr) . "<br>"; // Outputs: Apple
echo reset($arr) . "<br>";   // Outputs: Apple
echo next($arr) . "<br>";    // Outputs: Ball
echo current($arr) . "<br>"; // Outputs: Ball
echo reset($arr) . "<br>";   // Outputs: Apple
?>