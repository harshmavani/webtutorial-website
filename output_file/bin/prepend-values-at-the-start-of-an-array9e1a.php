<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Adding Values at the Beginning of the PHP Array</title>
</head>
<body>

<?php
$skills = array("HTML5", "CSS3", "JavaScript");
 
// Prepend array with new items
array_unshift($skills, "Illustrator", "Photoshop");
print_r($skills);
?>

</body>
</html>