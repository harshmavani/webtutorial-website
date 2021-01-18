<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Creating a String by Joining Array Elements in PHP</title>
</head>
<body>

<?php
$array = array("red", "green", "blue");
$str = implode(", ", $array);
echo $str;
?>

</body>
</html>