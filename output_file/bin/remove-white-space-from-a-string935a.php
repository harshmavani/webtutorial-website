<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Remove White Space from a String</title>
</head>
<body>

<?php
$my_str = '    Welcome to Tutorial Republic ';
echo "No of characters before removing whitespace - " . strlen($my_str); // Outputs: 33

echo "<br>";

$trimmed_str = trim($my_str);
echo "No of characters after removing whitespace - " . strlen($trimmed_str); // Outputs: 28
?>

</body>
</html>