<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Passing Arguments by Reference</title>
</head>
<body>

<?php
/* Defining a function that multiply a number
by itself and return the new value */
function selfMultiply(&$number){
    $number *= $number;
    return $number;
}
 
$mynum = 5;
echo $mynum . "<br>"; // Outputs: 5
 
selfMultiply($mynum);
echo $mynum . "<br>"; // Outputs: 25
?>

</body>
</html>