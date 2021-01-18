<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Deleting Blank PHP Array Values</title>
</head>
<body>

<?php
$array = array("apple", "", 2, null, -5, "orange", 10, false, "");
var_dump($array);
echo "<hr>";
 
// Filtering the array
$result = array_filter($array);                 
var_dump($result);
?>

</body>
</html>