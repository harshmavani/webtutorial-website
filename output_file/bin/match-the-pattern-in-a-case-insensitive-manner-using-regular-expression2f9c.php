<!DOCTYPE html>
<html lang="en">
<head>
    <title>Match the Pattern in a Case-insensitive Manner Using RegExp in PHP</title>
</head>
<body>

<?php
$pattern = "/color/i";
$text = "Color red is more visible than color blue in daylight.";
$matches = preg_match_all($pattern, $text, $array);
echo $matches . " matches were found."
?>

</body>
</html>