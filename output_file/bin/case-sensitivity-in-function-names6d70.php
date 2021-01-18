<!DOCTYPE HTML>
<html>
<head>
    <title>Case Sensitivity in PHP</title>
</head>
<body>

<?php
// Assign value to variable
$color = "blue";
 
// Get the type of a variable
echo gettype($color) . "<br>";
echo GETTYPE($color) . "<br>";
?>

</body>
</html>