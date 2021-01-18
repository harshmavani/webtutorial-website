<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Testing Whether a Variable is Set in PHP</title>
</head>
<body>

<?php
$var1 = '';
if(isset($var1)){
    echo 'This line is printed, because the $var1 is set.';
}
echo "<br>";
 
$var2 = 'Hello World!';
if(isset($var2)){
    echo 'This line is printed, because the $var2 is set.';
}
echo "<br>";
 
// Unset the variable
unset($var2);
 
if(isset($var2)){
    echo 'This line is printed, because the $var2 is set.';
} else{
    echo 'This line is printed, because the $var2 is not set.';
}
echo "<br>";
 
$var3 = NULL;
if(isset($var3)){
    echo 'This line is printed, because the $var3 is set.';
} else{
    echo 'This line is printed, because the $var3 is not set.';
}
?>

</body>
</html>