<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Displaying the PHP Array Values</title>
</head>
<body>

<?php
$colors = array("Red", "Green", "Blue", "Yellow", "Orange");
 
// Loop through colors array
foreach($colors as $value){
    echo $value . "<br>";
}
?>

</body>
</html>