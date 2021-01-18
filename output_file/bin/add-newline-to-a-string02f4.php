<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Adding Newlines in PHP</title>
</head>
<body>

<?php
echo "If you view the source of output frame \r\n you will find a newline in this string.";
echo "<br>";
echo nl2br("You will find the \n newlines in this string \r\n on the browser window.");
?>

</body>
</html>