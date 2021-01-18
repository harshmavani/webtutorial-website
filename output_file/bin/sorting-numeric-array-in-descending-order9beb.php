<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Sorting PHP Numeric Array in Descending Order</title>
</head>
<body>

<?php
$text = array("Sky", "Cloud", "Birds", "Rainbow", "Moon");
$numbers = array(1, 2, 3.5, 5, 8, 10);
 
// Sorting the array of string
rsort($text);
print_r($text);
echo "<br>";
 
// Sorting the array of numbers
rsort($numbers);
print_r($numbers);
?>

</body>
</html>