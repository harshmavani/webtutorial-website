<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Shuffling a PHP Array</title>
</head>
<body>

<?php
// Creating an array containing a range of elements
$numbers = range(1, 10);
 
// Randomize the order of array items
shuffle($numbers);
foreach ($numbers as $value){
    echo "$value" . "<br>";
}
?>

</body>
</html>