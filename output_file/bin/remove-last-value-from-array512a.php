<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Removing the Last Value from PHP Array</title>
</head>
<body>

<?php
$sports = array("Baseball", "Cricket", "Football", "Shooting");
 
// Deleting last array item
$removed = array_pop($sports);
print_r($sports);
echo "<hr>";

echo 'The value removed from the $sports array is - ' . $removed;
?>

</body>
</html>