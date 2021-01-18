<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Find Number of Characters in a String</title>
</head>
<body>

<?php
$my_str1 = 'The quick brown fox jumps over the lazy dog.';
echo 'No of characters in $my_str1 - ' . strlen($my_str1); // Outputs: 44

echo "<br>";

$my_str2 = '    The quick brown fox jumps over the lazy dog. ';
echo 'No of characters in $my_str2 - ' . strlen($my_str2); // Outputs: 49
?>

</body>
</html>