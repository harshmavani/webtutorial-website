<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Testing Whether a Value Exists in PHP Array</title>
</head>
<body>

<?php
$zoo = array("Lion", "Elephant", "Tiger", "Zebra", "Rhino", "Bear");
if(in_array("Elephant", $zoo)){
    echo "The elephant was found in the zoo.";
}
echo "<br>";
if(in_array("Tiger", $zoo)){
    echo "The tiger was found in the zoo.";
}
?>

</body>
</html>