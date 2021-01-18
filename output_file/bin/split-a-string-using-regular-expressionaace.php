<!DOCTYPE html>
<html lang="en">
<head>
    <title>Split a String Using RegExp in PHP</title>
</head>
<body>

<?php
$pattern = "/[\s,]+/";
$text = "My favourite colors are red, green and blue";
$parts = preg_split($pattern, $text);
 
// Loop through parts array and display substrings
foreach($parts as $part){
    echo $part . "<br>";
}
?>

</body>
</html>