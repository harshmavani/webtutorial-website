<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Global Keyword</title>
</head>
<body>

<?php
$greet = "Hello World!";
 
// Defining function
function test(){
    global $greet;
    echo '<p>$greet inside function is: ' . $greet . '</p>';
}
 
test();
echo '<p>$greet outside of function is: ' . $greet . '</p>';
 
// Assign a new value to variable
$greet = "Goodbye";
 
test();
echo '<p>$greet outside of function is: ' . $greet . '</p>';
?>

</body>
</html>