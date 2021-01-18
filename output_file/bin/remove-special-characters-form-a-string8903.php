<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Remove Special Characters from a String</title>
</head>
<body>

<?php
$my_str = "String with <b>special</b> characters.";
 
// Removing HTML special characters
echo htmlspecialchars($my_str);
?>

</body>
</html>