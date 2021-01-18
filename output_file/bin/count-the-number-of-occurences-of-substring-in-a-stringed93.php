<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Counting the Number of Substring Occurrences in PHP</title>
</head>
<body>

<?php
$quote = "Try not to become a man of success, but rather try to become a man of value.";
 
echo "The substring 'man' occurs " . substr_count($quote, 'man') . " times in the given string.";
?>

</body>
</html>