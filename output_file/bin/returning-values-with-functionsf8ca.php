<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Function Returning Values</title>
</head>
<body>

<?php
// Defining function
function getSum($num1, $num2){
    $total = $num1 + $num2;
    return $total;
}
 
// Printing returned value
echo getSum(5, 10); // Outputs: 15
?>

</body>
</html>