<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Convert a Decimal Number to Binary and Vice Versa</title>
</head>
<body>

<?php
// Convert Decimal to Binary 
echo decbin(2) . "<br>";    // 0utputs: 10  
echo decbin(12) . "<br>";   // 0utputs: 1100  
echo decbin(100) . "<br>";  // 0utputs: 1100100
 
// Convert Binary to Decimal
echo bindec(10) . "<br>";       // 0utputs: 2 
echo bindec(1100) . "<br>";     // 0utputs: 12  
echo bindec(1100100) . "<br>";  // 0utputs: 100
?>

</body>
</html>