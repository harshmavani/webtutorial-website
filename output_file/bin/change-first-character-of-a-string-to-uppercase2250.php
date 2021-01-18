<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Changing First Character of String to Uppercase in PHP</title>
</head>
<body>

<?php
$str1 = 'the color of the sky is blue.';
echo ucfirst($str1);
echo "<br>";
$str2 = 'the Color of the Sky is Blue.';
echo ucfirst(strtolower($str2));
?>

</body>
</html>