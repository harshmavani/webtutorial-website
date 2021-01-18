<!DOCTYPE html>
<html lang="en">
<head>
    <title>Match a Pattern in a Multiline String Using RegExp in PHP</title>
</head>
<body>

<?php
$pattern = "/^color/im";
$text = "Color red is more visible than \ncolor blue in daylight.";
$matches = preg_match_all($pattern, $text, $array);
echo $matches . " matches were found."
?>

</body>
</html>