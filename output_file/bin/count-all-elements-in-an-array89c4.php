<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Counting an Array Values in PHP</title>
</head>
<body>

<?php
$days = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
 
// Printing array size
echo 'Total number of elements in the $days array is - ' . count($days);
echo "<br>";
echo 'Total number of elements in the $days array is - ' . sizeof($days);
?>

</body>
</html>