<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Merging Two PHP Array into One Array</title>
</head>
<body>

<?php
$array1 = array(1, "fruit" => "banana", 2, "monkey", 3);
$array2 = array("a", "b", "fruit" => "apple", "city" => "paris", 4, "c");
 
// Merging arrays together
$result = array_merge($array1, $array2);
print_r($result);
?>

</body>
</html>