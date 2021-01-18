<!DOCTYPE html>
<html lang="en">
<head>
    <title>JSON Encode PHP Associative Array</title>
</head>
<body>

<?php
// An associative array
$marks = array("Peter"=>65, "Harry"=>80, "John"=>78, "Clark"=>90);
 
echo json_encode($marks);
?>

</body>
</html>