<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Spaceship Operators</title>
</head>
<body>

<?php
// Comparing Integers 
echo 1 <=> 1; // Outputs: 0
echo "<br>";
echo 1 <=> 2; // Outputs: -1
echo "<br>";
echo 2 <=> 1; // Outputs: 1
echo "<hr>";
 
// Comparing Floats
echo 1.5 <=> 1.5; // Outputs: 0
echo "<br>";
echo 1.5 <=> 2.5; // Outputs: -1
echo "<br>";
echo 2.5 <=> 1.5; // Outputs: 1
echo "<hr>";
 
// Comparing Strings
echo "x" <=> "x"; // Outputs: 0
echo "<br>";
echo "x" <=> "y"; // Outputs: -1
echo "<br>";
echo "y" <=> "x"; // Outputs: 1
?>

</body>
</html>