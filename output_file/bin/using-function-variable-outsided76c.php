<!DOCTYPE html>
<html lang="en">
<head>
    <title>Using PHP Function Variable Outside</title>
</head>
<body>

<?php
// Defining function
function test(){
    $greet = "Hello World!";
    echo '<p>$greet inside function is: ' . $greet . '</p>';
}

test();

// Generate undefined variable error
echo '<p>$greet outside of function is: ' . $greet . '</p>';
?>

</body>
</html>