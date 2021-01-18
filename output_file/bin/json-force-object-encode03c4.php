<!DOCTYPE html>
<html lang="en">
<head>
    <title>JSON Force Object Encode in PHP</title>
</head>
<body>

<?php
// An indexed array
$colors = array("Red", "Green", "Blue", "Orange");
 
echo json_encode($colors, JSON_FORCE_OBJECT);
?>

</body>
</html>