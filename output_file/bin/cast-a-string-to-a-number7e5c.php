<?php
$num = "2.75";
 
// Cast to integer
$int = (int)$num;
echo gettype($int) . "<br>"; // Outputs: integer
echo $int . "<br>"; // Outputs: 2
 
// Cast to float
$float = (float)$num;
echo gettype($float) . "<br>"; // Outputs: double
echo $float; // Outputs: 2.75
?>