<!DOCTYPE html>
<html lang="en">
<head>
    <title>Find and Replace Characters in a String Using RegExp in PHP</title>
</head>
<body>

<?php
$pattern = "/\s/";
$replacement = "-";
$text = "Earth revolves around\nthe\tSun";
// Replace spaces, newlines and tabs
echo preg_replace($pattern, $replacement, $text);
echo "<br>";
// Replace only spaces
echo str_replace(" ", "-", $text);
?>

</body>
</html>