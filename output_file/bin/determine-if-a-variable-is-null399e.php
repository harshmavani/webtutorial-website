<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Testing Whether a Variable is NULL in PHP</title>
</head>
<body>

<?php
$var = NULL;
 
// Testing the variables
if(is_null($var)){
    echo 'This line is printed, because the $var is null.';
}
echo "<br>";

if(is_null($inexistent)){
    echo 'This line is printed, because the $inexistent is null.';
}
?>

</body>
</html>