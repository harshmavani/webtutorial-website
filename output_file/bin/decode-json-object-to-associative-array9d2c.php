<!DOCTYPE html>
<html lang="en">
<head>
    <title>Decode JSON Object to Associative Array in PHP</title>
</head>
<body>

<?php
// Store JSON data in a PHP variable
$json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';
 
var_dump(json_decode($json, true));
?>

</body>
</html>