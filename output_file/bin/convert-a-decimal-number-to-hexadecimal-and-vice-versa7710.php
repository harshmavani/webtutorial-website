<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Convert a Decimal Number to Hexadecimal and Vice Versa</title>
</head>
<body>

<?php
// Convert decimal to hexadecimal 
echo dechex(255) . "<br>";  // 0utputs: ff
echo dechex(196) . "<br>";  // 0utputs: c4
echo dechex(0) . "<br>";    // 0utputs: 0
 
// Convert hexadecimal to decimal
echo hexdec('ff') . "<br>";  // 0utputs: 255
echo hexdec('c4') . "<br>";  // 0utputs: 196
echo hexdec(0) . "<br>";     // 0utputs: 0
?>

</body>
</html>