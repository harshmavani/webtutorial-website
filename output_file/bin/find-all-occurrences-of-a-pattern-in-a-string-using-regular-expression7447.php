<!DOCTYPE html>
<html lang="en">
<head>
    <title>Find all Occurrences of a Pattern in a String Using RegExp in PHP</title>
</head>
<body>

<?php
$pattern = "/ca[kf]e/";
$text = "He was eating cake in the cafe.";
$matches = preg_match_all($pattern, $text, $array);
echo $matches . " matches were found."
?>

</body>
</html>