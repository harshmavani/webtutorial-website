<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Function with Parameters</title>
</head>
<body>

<?php
// Defining function
function getSum($num1, $num2){
  $sum = $num1 + $num2;
  echo "Sum of the two numbers $num1 and $num2 is : $sum";
}
 
// Calling function
getSum(10, 20);
?>

</body>
</html>