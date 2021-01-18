<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Stripping Whitespace in PHP</title>
</head>
<body>

<?php
$my_str = 'Hello World!    ';
echo "Length of the original string - " . strlen($my_str);
echo "<br>";
 
$trimmed_str = rtrim($my_str);
echo "Length of string after removing the space - " . strlen($trimmed_str);
?>

</body>
</html>