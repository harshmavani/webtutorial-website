<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Removing Duplicate Elements from PHP Array</title>
</head>
<body>

<?php
$array = array("a" => "moon", "star", "b" => "moon", "star", "sky");
 
// Deleting the duplicate items
$result = array_unique($array);
print_r($result);
?>

</body>
</html>