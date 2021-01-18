<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Sorting PHP Associative Array Keys in Ascending Order</title>
</head>
<body>

<?php
$fruits = array("b"=>"banana", "a"=>"apple", "d"=>"dog", "c"=>"cat");
 
// Sorting the array by key
ksort($fruits);
print_r($fruits);
?>

</body>
</html>