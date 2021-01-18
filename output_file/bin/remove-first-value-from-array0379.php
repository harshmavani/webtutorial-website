<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Removing the First Value from PHP Array</title>
</head>
<body>

<?php
$hobbies = array("Acting", "Drawing", "Music", "Films", "Photography");
 
// Deleting first array item
$removed = array_shift($hobbies);
print_r($hobbies);
echo "<hr>";

echo 'The value removed from the $hobbies array is - ' . $removed;
?>

</body>
</html>