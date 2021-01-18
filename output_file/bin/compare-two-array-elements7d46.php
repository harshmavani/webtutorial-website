<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Comparing the Two PHP Array Elements</title>
</head>
<body>

<?php
$array1 = array("a" => "sky", "star", "moon", "cloud", "moon");
$array2 = array("b" => "sky", "sun", "moon");
 
// Comparing the values
$result = array_diff($array1, $array2);
print_r($result);
?>

</body>
</html>