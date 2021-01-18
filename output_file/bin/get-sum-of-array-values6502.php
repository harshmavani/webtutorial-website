<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Computing Sum of PHP Array Values</title>
</head>
<body>

<?php
$array1 = array(1, 2, 4.5, 8, 15);
$array2 = array("a" => 1.5, "b" => 2.5, "c" => 4.6, "d" => 10.4);
 
echo 'The sum of values of $array1 is - ' . array_sum($array1);
echo "<br>";
echo 'The sum of values of $array2 is - ' . array_sum($array2);
?>

</body>
</html>