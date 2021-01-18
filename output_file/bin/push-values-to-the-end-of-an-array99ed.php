<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Adding Values at the End of the PHP Array</title>
</head>
<body>

<?php
$skills = array("HTML5", "CSS3", "JavaScript");
 
// Append array with new items
array_push($skills, "jQuery", "PHP");
print_r($skills);
?>

</body>
</html>