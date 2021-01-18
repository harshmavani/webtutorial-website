<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Extracting Substring from a String in PHP</title>
</head>
<body>

<?php
$str = "Hello World!";

echo substr($str, 0, 5);
echo "<br>";

echo substr($str, 0, -7);
echo "<br>";

echo substr($str, 0);
echo "<br>";

echo substr($str, -6, 5);
echo "<br>";

echo substr($str, -6);
echo "<br>";

echo substr($str, -12);
?>

</body>
</html>