<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sanitize a String in PHP</title>
</head>
<body>

<?php
// Sample user comment
$comment = "<h1>Hey there! How are you doing today?</h1>";
 
// Sanitize and print comment string
$sanitizedComment = filter_var($comment, FILTER_SANITIZE_STRING);
echo $sanitizedComment;
?>

</body>
</html>    