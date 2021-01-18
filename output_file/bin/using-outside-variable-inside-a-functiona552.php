<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Using Outside Variable inside a Function</title>
</head>
<body>

<?php
$greet = "Hello World!";
 
// Defining function
function test(){
    echo '<p>$greet inside function is: ' . $greet . '</p>';
}

// Generate undefined variable error
test();  

echo '<p>$greet outside of function is: ' . $greet . '</p>';
?>

</body>
</html>